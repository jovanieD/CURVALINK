@extends('layouts.student-dashboard')

@section('student')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <div class="container mt-5">
                    {{-- For Search --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" id="searchInput" class="form-control" placeholder="Search events">
                                <div class="input-group-append">
                                    <button id="searchButton" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="btn-group mb-3" role="group" aria-label="Calendar Actions">
                                <button id="exportButton" class="btn btn-success">Export Calendar</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div id="calendar" style="width: 100%;height:100vh"></div>

                        </div>
                    </div>
                </div>
                </body>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

                <script>
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    var calendarEl = document.getElementById('calendar');
                    var events = [];
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        headerToolbar: {
                            left: '',
                            center: 'title',
                            right: 'prev,next'
                        },
                        initialView: 'dayGridMonth',
                        timeZone: 'UTC',
                        events: '/events',
                        editable: true,

                        // Deleting The Event
                        eventContent: function(info) {
                            var eventTitle = info.event.title;
                            var eventElement = document.createElement('div');
                            eventElement.innerHTML = '<span style="cursor: pointer;">❌</span> ' + eventTitle;

                            eventElement.querySelector('span').addEventListener('click', function() {
                                if (confirm("Are you sure you want to delete this event?")) {
                                    var eventId = info.event.id;

                                    $.ajax({
                                        method: 'DELETE',
                                        url: '/schedule/' + eventId,
                                        success: function(response) {
                                            console.log('Event deleted successfully.');
                                            calendar.refetchEvents(); // Refresh events after deletion
                                        },
                                        error: function(error) {
                                            console.error('Error deleting event:', error);
                                        }
                                    });
                                }
                            });
                            return {
                                domNodes: [eventElement]
                            };
                        },

                        // Drag And Drop

                        eventDrop: function(info) {
                            var eventId = info.event.id;
                            var newStartDate = info.event.start;
                            var newEndDate = info.event.end || newStartDate;
                            var newStartDateUTC = newStartDate.toISOString().slice(0, 10);
                            var newEndDateUTC = newEndDate.toISOString().slice(0, 10);

                            $.ajax({
                                method: 'PUT',
                                url: `/schedule/${eventId}`,
                                data: {
                                    start_date: newStartDateUTC,
                                    end_date: newEndDateUTC,
                                },
                                success: function() {
                                    console.log('Event moved successfully.');
                                },
                                error: function(error) {
                                    console.error('Error moving event:', error);
                                }
                            });
                        },

                        eventClick: function(info) {
                            // Display event details in the modal
                            $('#eventTitle').text('Title: ' + info.event.title);
                            $('#eventStart').text('Start: ' + info.event.start.toLocaleString());
                            $('#eventEnd').text('End: ' + (info.event.end ? info.event.end.toLocaleString() : ''));

                            $('#eventModal').modal('show');
                        },

                        // Event Resizing
                        eventResize: function(info) {
                            var eventId = info.event.id;
                            var newEndDate = info.event.end;
                            var newEndDateUTC = newEndDate.toISOString().slice(0, 10);

                            $.ajax({
                                method: 'PUT',
                                url: `/schedule/${eventId}/resize`,
                                data: {
                                    end_date: newEndDateUTC
                                },
                                success: function() {
                                    console.log('Event resized successfully.');
                                },
                                error: function(error) {
                                    console.error('Error resizing event:', error);
                                }
                            });
                        },
                    });

                    calendar.render();

                    document.getElementById('searchButton').addEventListener('click', function() {
                        var searchKeywords = document.getElementById('searchInput').value.toLowerCase();
                        filterAndDisplayEvents(searchKeywords);
                    });


                    function filterAndDisplayEvents(searchKeywords) {
                        $.ajax({
                            method: 'GET',
                            url: `/events/search?title=${searchKeywords}`,
                            success: function(response) {
                                calendar.removeAllEvents();
                                calendar.addEventSource(response);
                            },
                            error: function(error) {
                                console.error('Error searching events:', error);
                            }
                        });
                    }


                    // Exporting Function
                    document.getElementById('exportButton').addEventListener('click', function() {
                        var events = calendar.getEvents().map(function(event) {
                            return {
                                title: event.title,
                                start: event.start ? event.start.toISOString() : null,
                                end: event.end ? event.end.toISOString() : null,
                                // color: event.backgroundColor,
                            };
                        });

                        var wb = XLSX.utils.book_new();

                        var ws = XLSX.utils.json_to_sheet(events);

                        XLSX.utils.book_append_sheet(wb, ws, 'Events');

                        var arrayBuffer = XLSX.write(wb, {
                            bookType: 'xlsx',
                            type: 'array'
                        });

                        var blob = new Blob([arrayBuffer], {
                            type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                        });

                        var downloadLink = document.createElement('a');
                        downloadLink.href = URL.createObjectURL(blob);
                        downloadLink.download = 'events.xlsx';
                        downloadLink.click();
                    })
                </script>


            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display event details here -->
                    <p id="eventTitle"></p>
                    <p id="eventStart"></p>
                    <p id="eventEnd"></p>
                </div>
            </div>
        </div>
    </div>
@endsection
