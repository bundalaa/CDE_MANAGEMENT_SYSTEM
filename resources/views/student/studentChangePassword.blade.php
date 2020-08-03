<!DOCTYPE html>
<html>
    <head>
        <title>profile</title>
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
                          <span class="badge badge-danger navbar-badge"></span>
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
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">

                                @if (Auth::user())
                                @if(Auth::User()->avatar!='/profile/avatar5.png')
                            <img src="{{url('profile/avatar5.png')}}"  alt="" style="width:30px;height:30px;border-radius:50%">

                                @else
                                <img src="{{$user->avatar}}" alt="" style="width:30px;height:30px;border-radius:50%">
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
            <section id="dashboard" class="py-1">
                <div class="container">
                    <i class="fas fa-edit fa-3x"></i>
                    <span class="display-4 text-info">Edit password</span>
                </div>
            </section>

            <div id="content-wrap">
                @extends('layouts.app')
                @section('content')
                <div class="row justify-content-center">
                <div class="col-md-8">
                <section id="body-panel" class="py-4">
                    <div class="container">
                        <div class="row pt-1">
                            <div class="col-md-12 d-flex justify-content-center flex-wrap flex-column">
                                <div class="card" id="card-table">
                                    <div class="card-header">
                                        <h4>Change Password</h4>
                                    </div>
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
                                    <div class="card-body px-5">
                                    <form action="changeStuPassword" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label for="Current password"></label>
                                                <input type="password" name="old_pass" id="password"
                                                    class="form-control p-4" placeholder="Current Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="New Password"></label>
                                                <input type="password" name="new_pass" id="password-2"
                                                    class="form-control p-4" placeholder="New Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Confirm password"></label>
                                                <input type="password" name="confirm_pass" id="password-3"
                                                    class="form-control p-4" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="submit" id="submit" class="btn btn-primary col-md-4">Save </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
                </div>
            </div>
            <footer id="footer" class="bg-dark">
                <div class="py-3 text-center">
                    <p> &copy;Copyright Udsm <span id="year"></span>20<?php echo date('y');?>, All rights reserved</>
                </div>
            </footer>
            </div>
            @endsection
        </body>
   </html>
