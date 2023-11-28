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

    <!-- Scripts -->
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
            events: {
                url: '/events',
                method: 'GET',
                success: function(data) {
                    var formattedEvents = data.map(function(event) {
                        return {
                            id: event.id,
                            title: event.document,
                            start: event.startdate,
                            end: event.enddate,
                            color: event.color,
                            editable: true,
                            event: event
                        };
                    });

                    calendar.addEventSource(formattedEvents);
                }
            },
            editable: true,
            eventClick: function(info) {
                // Open the modal and display event details
                $('#eventModalLabel').text(info.event.title);
                $('#eventTitle').text('Title: ' + info.event.title);
                $('#eventStart').text('Start: ' + info.event.start.toLocaleString());
                $('#eventEnd').text('End: ' + info.event.end.toLocaleString());
                $('#eventModal').modal('show');
            }
        });

        calendar.render();
    </script>

    <script>
        document.getElementById('exportButton').addEventListener('click', function() {
            var events = calendar.getEvents().map(function(event) {
                return {
                    document: event.title,
                    start: event.start ? event.start.toISOString() : null,
                    end: event.end ? event.end.toISOString() : null,
                    color: event.backgroundColor,
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
@endsection
