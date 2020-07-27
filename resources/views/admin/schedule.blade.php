<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Calendar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-bootstrap/main.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Bootstrap CSS LOCAL -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--external css link-->
  <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin-css/home.css') }}">
 <!-- Font Awesome CDN -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
     integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
 <!-- Google Fonts CDN -->
 <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&display=swap" rel="stylesheet">
 <link
     href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Philosopher&family=Poiret+One&display=swap"
     rel="stylesheet">
 <link
     href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Marmelad&family=Philosopher&family=Poiret+One&display=swap"
     rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&display=swap" rel="stylesheet">
 <!-- Bootstrap CSS CDN -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark py-0 fixed-top">
        <div class="container">
            <a href="{{url('supervisorHome')}}" class="navbar-brand">
                <img src="{{URL::asset('/images/logos/logo.png')}}" alt="udsm logo" height="40" width="45">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item active px-2">
                        <a href="{{route('/')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('viewprogress')}}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('getchallenge')}}" class="nav-link">Challenges</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('view-schedule')}}" class="nav-link">Fill Schedule</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('view-publication')}}" class="nav-link">Publications</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('getAttendanceReport')}}" class="nav-link">Attendance Report</a>
                    </li>
                    <ul class="navbar-nav ml-auto">
                        <!-- Messages Dropdown Menu -->
                        <li class="nav-item dropdown">
                          <a class="nav-link" data-toggle="dropdown" href="#">
                            <i id="notification" class="far fa-comments">
                              <span class="badge navbar-badge">3</span>
                            </i>
                            {{-- <span class="badge badge-danger">3</span> --}}
                          </a>
                          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                              <!-- Message Start -->
                              <div class="media">
                                <div class="media-body">
                                  <h3 class="dropdown-item-title">
                                    MORUWASA company
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                  </h3>
                                  <p class="text-sm">Got some problem...</p>
                                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                              </div>
                              <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                          </div>
                        </li>
                        <!-- Notifications Dropdown Menu -->
                        <li class="nav-item dropdown">
                          <a class="nav-link" data-toggle="dropdown" href="#">
                            <i id="notification" class="far fa-bell">
                              <span class="badge navbar-badge">15</span>
                            </i>
                            {{-- <span class="badge badge-danger navbar-badge">15</span> --}}
                          </a>
                          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                              <i class="fas fa-envelope mr-2"></i> 4 new messages
                              <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                              <i class="fas fa-file mr-2"></i> 3 new reports
                              <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown ml-5" >
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                              @if (auth()->user())
                              @if(Auth::User()->avatar!='/images/default-avatar.png')
                              <img src="{{asset('/images/avatars/'.Auth::User()->avatar)}}" alt="" style="width:30px;height:30px;border-radius:50%">

                              @else
                              <img src="{{asset(Auth::User()->avatar)}}" alt="" style="width:30px;height:30px;border-radius:50%">
                              @endif
                               Welcome {{auth()->user()->name}}
                              @endif
                          </a>
                          <div class="dropdown-menu">
                          <a href="{{url('profile')}}" class="dropdown-item">
                                  <i class="fas fa-user-circle"></i> Profile
                              </a>
                              <hr class="solid">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              <i class="fas fa-sign-out-alt    "></i> {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                          </div>
                      </li>
                      </ul>
    </nav>
    <header id="dashboard" class="pt-5 pb-3">
        <div class="container pt-3 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="" aria-hidden="true"></i> Schedule
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
<div id="content-wrap">
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
                <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Draggable Events</h4>
                    </div>
                    <div class="card-body">
                      <!-- the events -->
                      <div id="external-events">
                        <div class="checkbox">
                          <label for="drop-remove">
                            <input type="checkbox" id="drop-remove">
                            remove after drop
                          </label>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Create Event</h3>
                </div>
                <div class="card-body">
                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                    <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                    <div class="input-group-append">
                      <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="form-group">
            <button type="submit" name="submit" id="submit"
                class="form-control btn-info"><i class="fas fa-check-circle"></i>
                Save
                Changes
            </button>
        </div>        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <footer id="footer" class="bg-dark">
        <div class="py-3 text-center">
            <p> &copy; Copyright Udsm <span id="year"></span>, All rights reserved</>
        </div>
    </footer>
  </div>


<!-- Jquery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Bootstrap JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    // Get Full Year
    $('#year').text(new Date().getFullYear());
</script>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.min.js"></script>
<script src="../plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="../plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="../plugins/fullcalendar-interaction/main.min.js"></script>
<script src="../plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        console.log(eventEl);
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      'themeSystem': 'bootstrap',
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      ini_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>

{{-- @extends('layouts.menu')
@section('content')
    <header id="dashboard" class="pt-5 pb-3">
        <div class="container pt-3 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fa fa-calender text-dark"></i> Schedule
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
            <form action="{{route('schedule')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> Task name:</span>
                      </div>
                      <input type="text" name="name" class="form-control"  aria-label="Example placeholder1">
                  </div>
                    <div class="form-group">
                        <label for="exampleInput">Task description:</label>
                        <textarea class="form-control" id="exampleInput" rows="3" name="description"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Task date:</span>
                        </div>
                        <input type="date" name="taskdate" class="date">
                    </div>
                    <button type="submit" class="btn btn-info mb-2">Save</button>
                  </form>
            </div>
            </div>
            <div class="col-8">
                <div id='calendar'></div>
            </div>
        </div>
            </div>
            @endsection
            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
            <script>
                $(document).ready(function() {
                    // page is now ready, initialize the calendar...
                    $('#calendar').fullCalendar({
                        // put your options and callbacks here
                        events : [
                            @foreach($schedules as $schedule)
                            {
                                title : '{{$schedule->name }}',
                                start : '{{ $schedule->taskdate }}',
                            },
                            @endforeach
                        ]
                    })
                });
            </script>
            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
            <script>
                $('.date').datepicker({
                    autoclose: true,
                    dateFormat: "yy-mm-dd"
                });
            </script> --}}
