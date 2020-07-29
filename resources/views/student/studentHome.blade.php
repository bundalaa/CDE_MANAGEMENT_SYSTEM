<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/student-css/student.css')}}">
    <title>Home</title>
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
                        <a href="StudentChallengeView" class="nav-link">Challenge</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="studentReport" class="nav-link">Upload Report</a>
                    </li>

                    <li class="nav-item px-2">
                        <a href="StudenSchedule" class="nav-link">Schedule</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="StudentTeamView" class="nav-link">Team</a>
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
                        <div class="row">
                        <div class="col-lg-6">
                        <span class="dropdown-item dropdown-header">Messages</span>
                        </div>
                        <div class="col-lg-6">
                        <a href="StudentSendMessage">New Message</a>
                        </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">


                          </div>
                          <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">

                          </div>
                          <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">

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
              <i class="fas fa-bell"></i>
              <span class="badge badge-warning navbar-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">

              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">

              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">

              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            {{-- <i class="fas fa-user-circle"></i> Welcome {{Auth::user()->name}} --}}
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
                            <a href="stuProfile" class="dropdown-item">
                                <i class="fas fa-user-circle"></i> Profile
                            </a>
                            {{-- <a href="#" class="dropdown-item">
                            <i class="fas fa-user-times"></i> Logout
                            </a> --}}
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
    <section id="dashboard" class="py-1">
        <div class="container">
            <i class="fas fa-home fa-3x"></i>
            <span class="display-4 text-info">Home</span>
        </div>
    </section>
 <div id="content-wrap">
    <div class="jumbotron text-center">
        <h2>Welcome to student Page</h2>
        <p>You can access functionalities by following appropriate links
      </p>
      </div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Uplaod Report</h3>
      <p class="text-justify">This functionality allows you as student to upload reports including weekly, mid reports,
         or final reports for final year projects and any other related reports under supervision of CDE coordination
        team.</p>

    </div>
    <div class="col-sm-4">
      <h3>Schedule</h3>
      <p class="text-justify">This functionality allows you as student to view schedule for different
      tasks or activities that will  fall under category day, week, month in form of calendar. This shows
      also the start date and end date for each task or activity throughout the project or any other related
      activities.
      </p>

    </div>
    <div class="col-sm-4">
        <h3>Team</h3>
        <p class="text-justify">This functionality allows you as student to view the project problem
             title your are  registered to, know the team members you will be working with them throughout
             the project and the one who will be supervising you during the project.
        </p>

      </div>
      <div class="col-sm-4">
        <h3>Projects</h3>
        <p class="text-justify">This functionality allows you as student to view list of project problem title and
        confirm to continue with the problem title obtained during data collection which based onthe society challenges and work
        on it as your final year project under CDE.
        </p>
  </div>
  <div class="col-sm-4">
    <h3>Comment</h3>
    <p class="text-justify">This functionality allows you as student to view comment from the
        supervisor related to the supervision of the project and be able to replay to the comment.
    </p>

  </div>
  <div class="col-sm-4">
    <h3>Notification</h3>
    <p class="text-justify">This functionality allows you as student to view any notification from the
        supervisor related to the supervision of the project and be able to see.

    </p>

  </div>
  </div>
</div>

</div>
<footer id="footer" class="bg-dark">
    <div class="py-3 text-center">
        <p> &copy;Copyright Udsm<span id="year"></span>20<?php echo date('y');?>, All rights reserved</>
    </div>
</footer>
</div>


    <!-- Jquery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

</body>
</html>

