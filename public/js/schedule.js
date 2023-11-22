document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        initialView: 'dayGridMonth',
        timeZone: 'UTC',
        events: '/events',
        editable: true,

        // Event Rendering and Deleting
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
                            calendar.getEventById(eventId).remove(); // Remove the event without refetching
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
        }
    });

    calendar.render();
});
