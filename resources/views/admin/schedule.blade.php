@extends('layouts.adminmenu')
@section('content')
    <header id="dashboard" class="pt-5 pb-3">
        <div class="container pt-3 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #2874A6">
                        <i class="fa fa-calendar text-dark"></i> Schedule
                    </h1>
                </div>
            </div>
        </div>
    </header>
    @if (session('message'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('message') }}
        </div>
    </div>
</div>
@endif
    <div id="page-container">
        <div id="content-wrap">
        <div class="row">
            <div class="col-4">
            <div class="container" style="padding-top: 20px">
                <h4>Add Schedule</h4>
            <form action="add-schedule" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> Task name:</span>
                      </div>
                      <input type="text" name="title" class="form-control">
                  </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Start:</span>
                        </div>
                        <input type="date" name="taskdate" class="date">
                    </div>
                    <button type="submit" class="btn btn mb-2" style="background-color: #2874A6">Save</button>
                  </form>
            </div>

            </div>
            <div class="col-8">
                <div id='calendar'></div>
            </div>
        </div>
            </div>
            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
            <script>
                $('.date').datepicker("option", "dateFormat", "yy-mm-dd ");
            </script>

            <script src="{{ URL::to('js/main.js') }}"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                  var calendarEl = document.getElementById('calendar');

                  var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: {
                      left: 'prev,next today',
                      center: 'title',
                      right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                    },
                    initialDate: '2020-06-12',
                    navLinks: true, // can click day/week names to navigate views
                    businessHours: true, // display business hours
                    editable: true,
                    selectable: true,
                    events: [
                        @foreach($schedules as $schedule)
                            {
                                title : '{{$schedule->title }}',
                                start : '{{ $schedule->taskdate }}',
                                url : '{{ route('deleteSchedule', $schedule->id) }}',
                            },
                            @endforeach
                    ]
                  });
                  calendar.render();
                });

              </script>
            @endsection
