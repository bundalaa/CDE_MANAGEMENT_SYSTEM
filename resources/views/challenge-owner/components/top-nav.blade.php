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
    <link
        href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Philosopher&family=Poiret+One&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Marmelad&family=Philosopher&family=Poiret+One&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="{{URL::asset('/images/logo.png')}} " alt="udsm logo" height="40" width="45">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav" style="list-style-type: none;">
                    <li class="nav-item px-2" style="color:success">
                      <h2 >  <a href="/" class="nav-link">CDEMS</a></h2>

                    </li>
                </ul>
                <ul style="list-style-type: none;" class="navbar-nav ml-auto">
                    <div class="navbar-nav">
                        @if (Route::has('login'))
                        @auth
                        @if(Auth::user()-> hasRole ('admin'))
                        <a href="{{ route('adminIndex') }}">Home</a>
                        @endif
                        @if(Auth::user()-> hasRole ('supervisor'))
                        <a href="{{ route('supervisorHome') }}">Home</a>
                        @endif
                        @if(Auth::user()-> hasRole ('student'))
                        <a href="{{ route('studentHome') }}">Home</a>
                        @endif
                        @if(Auth::user()-> hasRole ('challengeOwner'))
                        <a href="{{ route('dashboard') }}">Home</a>
                        @endif
                        @else
                        <li class="nav-item active px-2">
                            <a href="{{ route('login')}}">Sign in</a>
                        </li>
                        <li class="nav-item active px-2">
                            <a href="{{ route('register')}}">Sign up</a>
                        </li>
                </ul>
                {{-- </ul>

                </ul>
                </ul> --}}

                @endauth
                @endif
                </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
