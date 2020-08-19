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
                        <a class="nav-link"  href="StudentSendMessage">
                          <i class="fas fa-comments"></i>
                          <span class="badge badge-danger navbar-badge"></span>
                        </a>

                      </li>
                     <!-- Notifications Dropdown Menu -->
           {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i id="notification" class="fas fa-bell">
              <span class="badge navbar-badge">{{Auth::user()->Notifications->count() }}</span>
              </i>
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
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">

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
                    <i class="fas fa-user-circle fa-3x"></i>
                    <span class="display-4 text-info">Edit profile</span>
                </div>
            </section>
         <div id="content-wrap">
          @extends('layouts.app')
             @section('content')
             <div class="container">
                <div class="col-md-3">
                    <a href="/password" class="btn btn-success btn-block">
                        <i class="fas fa-lock text-light"></i> Change Password
                    </a>
                </div>
                  &nbsp;
                 <div class="row pb-1">
                     <div class="col-md-9 mb-4 d-flex justify-content-center flex-wrap flex-column">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('response'))

                    <div class="alert alert-success alert-block">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>
                    </div>
                  @endif

                <div class="card-body px-5">
                    <form action="/Addprofile" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Username"></label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <button class="btn btn-info">
                                        <i class="far fa-user"></i>
                                    </button>
                                </div>
                                <input type="text" name="name" id="username"
                                    class="form-control p-4" placeholder="Username"
                                    value="{{auth()->user()->name}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Email"></label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary">
                                        <i class="far fa-envelope"></i>
                                    </button>
                                </div>
                                <input type="email" name="email" id="email" class="form-control p-4"
                                    placeholder="Email address" value=" {{auth()->user()->email}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" id="submit"
                                class="form-control btn-info">
                               Add Profile
                            </button>
                        </div>
                    </form>
                </div>
               </div>
                </div>
                 <div class="col-md-3 pl-5">
                     @if(Auth::User()->avatar!='/images/default-avatar.png')
                     <img src="{{asset('/images/avatars/'.Auth::User()->avatar)}}" alt="" style="width:100px;margin-left:10px;height:100px;border-radius:50%">

                     @else
                     <img src="{{asset(Auth::User()->avatar)}}" alt="" style="width:100px;margin-left:10px;height:100px;border-radius:50%">

                     @endif
                 <form action="/Addprofile" method="post" enctype="multipart/form-data">
                    <div class="card-box"></div>
                     <div class="form-group">
                             <label for="img">Select image:</label>
                   <input type="file" id="avatarFile" name="avatar" class="form-control-file" style="padding-bottom:13px ">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                   <input  class="form-control btn btn-info btn-block" type="submit">
                         </div>
                     </form>
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
