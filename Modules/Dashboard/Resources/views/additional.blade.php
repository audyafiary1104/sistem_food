@section('js')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="{{asset('templates/js/fullcalendar-4.3.1/packages/core/main.js')}}"></script>
<script src="{{asset('templates/js/fullcalendar-4.3.1/packages/daygrid/main.js')}}"></script>
<script src="{{asset('templates/js/fullcalendar-4.3.1/packages/list/main.js')}}"></script>
<script src="{{asset('templates/js/fullcalendar-4.3.1/packages/interaction/main.js')}}"></script>
<script src="{{asset('templates/js/fullcalendar-4.3.1/packages/timegrid/main.js')}}"></script>
<link href="{{asset('templates/js/fullcalendar-4.3.1/packages/core/main.css')}}"rel='stylesheet' />
<link href="{{asset('templates/js/fullcalendar-4.3.1/packages/timegrid/main.css')}}"rel='stylesheet' />
<link href="{{asset('templates/js/fullcalendar-4.3.1/packages/list/main.css')}}"rel='stylesheet' />
<link href="{{asset('templates/js/fullcalendar-4.3.1/packages/daygrid/main.css')}}"rel='stylesheet' />

<script>
    $(document).ready(function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
            height: 'parent',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,listWeek'
            },
            defaultView: 'dayGridMonth',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            dateClick: function(info) {
                $('#date_start').val(info.dateStr);
                $('.js-example-basic-single').select2();
                $('#employee').hide();
                $('#exampleModal').modal('show');
                $('input[type="radio"]').click(function () {
                    if ($(this).val() == "Leave") {
                            $('#employee').show();
                    }else{
                        $('#employee').hide();
                    }
                });
            },
            eventClick: function(info) {
            alert('Event: ' + info.event.title);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('View: ' + info.view.type);
            info.el.style.borderColor = 'red';
        },
        });
        calendar.render();
      });
</script>
@endsection