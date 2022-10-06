<?php include 'inc/config.php'; // Configuration php file  ?>
<?php include 'inc/top.php'; // Meta data and header  ?>
<?php include 'inc/nav.php'; // Navigation content  ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">Calendar</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- FullCalendar -->
    <h3 class="page-header page-header-top">FullCalendar <small>With Google Calendar support!</small></h3>

    <div id="example-fullcalendar"></div>
    <!-- END FullCalendar -->

    <!-- FullCalendar (Drop Events) -->
    <h3 class="page-header">Drop Events <small>Drag and Drop events on the calendar to create events! Don't forget to try week or day view!</small></h3>

    <div class="row">
        <div class="col-md-2">
            <div id="fc-external-events">
                <h5>Draggable Events</h5>
                <div class="fc-external-event">Work</div>
                <div class="fc-external-event">Lunch</div>
                <div class="fc-external-event">Gym</div>
                <div class="fc-external-event">Relax</div>
                <div class="fc-external-event">Meeting</div>
            </div>
        </div>
        <div class="col-md-10">
            <div id="example-fullcalendar2"></div>
        </div>
    </div>
    <!-- END FullCalendar (Drop Events) -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function() {
        /* Initialize FullCalendar */
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#example-fullcalendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            events: [
                {
                    title: 'Relax Day',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Project #1',
                    start: new Date(y, m, 5),
                    end: new Date(y, m, 10)
                },
                {
                    id: 999,
                    title: 'Gym (repeated)',
                    start: new Date(y, m, d - 4, 18, 0),
                    allDay: false
                },
                {
                    id: 999,
                    title: 'Gym (repeated)',
                    start: new Date(y, m, d + 3, 18, 0),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 13, 00),
                    allDay: false
                },
                {
                    title: 'Project #2',
                    start: new Date(y, m, d, 8, 0),
                    end: new Date(y, m, d, 13, 0),
                    allDay: false
                },
                {
                    title: 'Party',
                    start: new Date(y, m, d + 6, 19, 0),
                    end: new Date(y, m, d + 6, 22, 30),
                    allDay: false
                },
                {
                    title: 'Follow me on Twitter',
                    start: new Date(y, m, 26),
                    end: new Date(y, m, 26),
                    url: 'http://twitter.com/pixelcave'
                }
            ]
        });

        /* Initialize FullCalendar with drag and drop events, Demo from http://arshaw.com/fullcalendar/ */
        $('#fc-external-events .fc-external-event').each(function() {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 100  //  original position after the drag
            });
        });

        $('#example-fullcalendar2').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            firstDay: 1,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#example-fullcalendar2').fullCalendar('renderEvent', copiedEventObject, true);
            }
        });
    });
</script>

<?php
include 'inc/bottom.php'; // Close body and html tags ?>