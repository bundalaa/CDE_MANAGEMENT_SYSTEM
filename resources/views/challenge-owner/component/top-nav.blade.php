<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/home.css')}}">
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
            <a href="/" class="navbar-brand">
        <img src="{{URL::asset('/images/logo.png')}} " alt="udsm logo" height="40" width="45">
        </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item active px-2">
                        <a href="/" class="nav-link">Home</a>
                    </li>
<<<<<<< HEAD:resources/views/challenge-owner/components/top-nav.blade.php
                    
=======
                    <li class="nav-item px-2">
                        <a href="upload-file" class="nav-link">Upload-Challenge</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="feedback" class="nav-link">Feedback</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="publication" class="nav-link">Publication</a>
                    </li>

>>>>>>> 4eaf2b8a2919f60a04439ebed12107d4f95449d2:resources/views/challenge-owner/component/top-nav.blade.php
                    <li class="nav-item px-2">
                        <a href="AboutUS" class="nav-link">About US</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="contact-us" class="nav-link">Contact Us</a>
                    </li>


                </ul>

                <ul class="navbar-nav ml-auto">
<<<<<<< HEAD:resources/views/challenge-owner/components/top-nav.blade.php
                   
                
                <ul class="navbar-nav">
                    <li class="nav-item active px-2">
                        <a href="{{ route('login')}}">Sign in</a>

=======
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                    <li class="nav-item active px-2">
                        <a href="{{ route('login') }}">Sign in</a>
>>>>>>> 4eaf2b8a2919f60a04439ebed12107d4f95449d2:resources/views/challenge-owner/component/top-nav.blade.php
                    </li>
                    <li class="nav-item active px-2">
<<<<<<< HEAD:resources/views/challenge-owner/components/top-nav.blade.php
                
                    <a href="{{ route('register')}}">Sign up</a>
                
            
                
                    </li>
                    </ul>
                </ul>
      
=======
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">Sign up</a>
                    @endif
                @endauth
                @endif

            </li>
                    </ul>

                    <!-- <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i> Welcome
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-user-circle"></i> Profile
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <hr class="solid">
                            <a href="#" class="dropdown-item">
                            <i class="fas fa-user-times"></i> Logout
                            </a>
                        </div>
                    </li> -->

>>>>>>> 4eaf2b8a2919f60a04439ebed12107d4f95449d2:resources/views/challenge-owner/component/top-nav.blade.php
                </ul>
            </div>
        </div>
    </nav>
