<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/student-css/student.css')}}">
    <title>Challenge</title>
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
<nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
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
                        <a href="StudentChallengeView" class="nav-link">Challenges</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="studentReport" class="nav-link">Upload Report</a>
                    </li>

                    <li class="nav-item px-2">
                        <a href="StudenSchedule" class="nav-link">Schedule</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="StudentTeamView" class="nav-link">Teams</a>
                    </li>
                 </ul>
                 <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="StudentSendMessage">
                              <i class="fas fa-comments"></i>
                              <span class="badge badge-danger navbar-badge"></span>
                            </a>
                        </li>
                <!-- Notifications Dropdown Menu -->
          {{-- <li class="nav-item dropdown">
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
          </li> --}}
          </ul>
     <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            @if (auth()->user())
                            @if(Auth::User()->avatar!='/images/default-avatar.png')
                            <img src="{{asset('/images/avatars/'.Auth::User()->avatar)}}"  alt="" style="width:30px;height:30px;border-radius:50%">

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
     <section id="dashboard" class="pt-4 pb-3 ">
     <div class="container pt-5 pb-0">
        <i class="fas fa-list fa-3x"></i>
        <span class="display-4" style="color: #2874A6">Challenges</span>
        </div>
    </section>
    <div id="content-wrap">
     <p style="margin-left:7px">This page allows you as student to view the list of project problem challenges and give you a
            chance to review the challenges collected during site visit.This list of the challenges helps students to review the
             challenges collected from stakeholders.

            </p>
     <div class="row justify-content-center">
       <div class="col-md-10">
            <div class="recent">
              <h3 style="text-align: center">The list of project problem</h3>
            </div>
                <table class="table table-striped">
                    <thead style="background-color: #2874A6">
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                @foreach($challenges as $challenge_id=>$challenge)
                   <tr>
                 <td>{{++$challenge_id}}</td>
                 <td>{{$challenge->name}}</td>
                 <td>{{$challenge->description}}</td>

                    </tr>

                 @endforeach
                    </tbody>
                </table>
            </div>

            {{-- <div class="dropdown-divider"></div>
           <a href="#" class="dropdown-item dropdown-footer">See All</a> --}}


        {{-- <div class="col-lg-6">
            <div class="recent">
            <div class="card">
                <div class="card-body">
                    <form role="form" action="" method="post">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="regno">RegNo.</label>
                    <input type="regno" class="form-control" id="regno" placeholder="Enter your regno">
                  </div>
              <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" id="email1" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="regno">Project Name.</label>
                <input type="project" class="form-control" id="project" placeholder="Enter project">
              </div>
                <div class="form-group">
                    <label>Details</label>
                    <textarea class="form-control" rows="3" placeholder="Enter others"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
              </div>
            </div>
            </div>
        </form> --}}
        </div>

    <footer id="footer" class="bg-dark">
        <div class="py-3 text-center">
        <p> &copy;<span id="year"></span>Copyright Udsm 20<?php echo date('y');?>, All rights reserved</>
        </div>
    </footer>
        </div>
            <!-- Jquery CDN -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
            <!-- Bootstrap JS CDN -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

        </body>
        </html>
