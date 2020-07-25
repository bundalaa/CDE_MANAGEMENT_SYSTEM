<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schedule</title>
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/student-css/student.css')}}">
   <link href='{{asset('assets/fullcalendar/lib/main.css')}}' rel='stylesheet' />
   <script src='{{asset('assets/fullcalendar/lib/main.js')}}'></script>
   <script src='{{asset('assets/fullcalendar/examples/js/theme-chooser.js')}}'></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Google Fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Philosopher&family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Marmelad&family=Philosopher&family=Poiret+One&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container">
            <a href="studentHome" class="navbar-brand">
        <img src="{{URL::asset('/images/logos/logo.png')}} " alt="udsm logo" height="40" width="45">
        </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item active px-2">
                        <a href="studentHome" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="FypConfirm" class="nav-link">Confirm Fyp</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="studentReport" class="nav-link">Upload Report</a>
                    </li>

                    <li class="nav-item px-2">
                        <a href="StudenSchedule" class="nav-link">Schedule</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="StudentProjectView" class="nav-link">Projects</a>
                    </li>
                 </ul>
                 <ul class="navbar-nav ml-auto">
                   <!-- Messages Dropdown Menu -->
                 <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-comments"></i>
                   <span class="badge badge-danger navbar-badge">3</span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                        </a>
                     </div>
                 </li>
                <!-- Notifications Dropdown Menu -->
               <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#">
               <i class="fas fa-bell"></i>
              <span class="badge badge-danger navbar-badge">5</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
              </div>
             </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown mr-3">
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
                            <a href="#" class="dropdown-item">
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
            </div>
        </div>
    </nav>
    <div id="page-container">
    <section id="dashboard" class="py-2">
        <div class="container">
            <i class="fas fa-calendar fa-3x"></i>
            <span class="display-4 text-info">Schedule</span>
        </div>
    </section>
    <div id="content-wrap">

     <!--content-->
     <div id='top'>
    <p class="text-justify">Here you can view your daily,weekly,monthly activities for a particular year where you can
     navigate to the day to view the list of activities on that day,same for weekly and monthly activities.
    The purpose is to allow you as student to know the general activities or events as you continue working
   with the challenge driven education team(CDE) from problem challenge exploration up to the implementation
    of the project.</p>
      </div>

      <div id='calendar'></div>
    </div>
    <footer id="footer" class="bg-dark">
        <div class="py-3 text-center">
        <p> &copy;20<?php echo date('y');?> Copyright Udsm <span id="year"></span>, All rights reserved</>
        </div>
    </footer>
     </div>

 <!-- Jquery CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <!-- Bootstrap JS CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
</body>
<script>
    var date = new Date()
    var d  = date.getDate(),
    m    = date.getMonth(),
    y    = date.getFullYear()
    document.addEventListener('DOMContentLoaded', function() {
      var initialLocaleCode = 'en';
      var localeSelectorEl = document.getElementById('locale-selector');
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        // initialDate: '2020-06-12',
        locale: initialLocaleCode,
        buttonIcons: false, // show the prev/next text
        weekNumbers: true,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        dayMaxEvents: true, // allow "more" link when too many events
        events: [
          {
            title: 'All Day Event',
            start: new Date(y, m, 1),
            allDay: true
          },
          {
            title: 'Long Event',
            start: '2020-06-07',
            end: '2020-06-10'
          },
          {
            groupId: 999,
            title: 'Repeating Event',
            start: '2020-06-09T16:00:00'
          },
          {
            groupId: 999,
            title: 'Repeating Event',
            start: '2020-06-16T16:00:00'
          },
          {
            title: 'Conference',
            start: '2020-06-11',
            end: '2020-06-13'
          },
          {
            title: 'Meeting',
            start: '2020-06-12T10:30:00',
            end: '2020-06-12T12:30:00'
          },
          {
            title: 'Lunch',
            start: '2020-06-12T12:00:00'
          },
          {
            title: 'Meeting',
            start: '2020-06-12T14:30:00'
          },
          {
            title: 'Happy Hour',
            start: '2020-06-12T17:30:00'
          },
          {
            title: 'Dinner',
            start: '2020-06-12T20:00:00'
          },
        //   {
        //     title: 'Birthday Party',
        //     start: '2020-06-13T07:00:00'
        //   },
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2020-06-28'
          }
        ]
      });
      events:'',

      calendar.render();

      // build the locale selector's options
      calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
        var optionEl = document.createElement('option');
        optionEl.value = localeCode;
        optionEl.selected = localeCode == initialLocaleCode;
        optionEl.innerText = localeCode;
        localeSelectorEl.appendChild(optionEl);
      });

      // when the selected option changes, dynamically change the calendar option
      localeSelectorEl.addEventListener('change', function() {
        if (this.value) {
          calendar.setOption('locale', this.value);
        }
      });

    });

  </script>
</html>
