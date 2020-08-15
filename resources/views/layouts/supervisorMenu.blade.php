<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Bootstrap CSS LOCAL -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!--external css link-->
     <script src="{{ asset('/css/custom/custom.css') }}"></script>

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
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark py-0 px-5 fixed-top">
        <div class="container">
            <a href="{{url('supervisorHome')}}" class="navbar-brand">
                <img src="{{URL::asset('/images/logos/logo.png')}}" alt="udsm logo" height="40" width="45">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="{{route('supervisorHome')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('viewteam')}}" class="nav-link">Teams</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('challenge-screen')}}" class="nav-link">Challenges</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('view-report')}}" class="nav-link">Reports</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('view-attendance')}}" class="nav-link">Attendance</a>
                    </li>
                        <!-- Notifications Dropdown Menu -->
                        <li class="nav-item dropdown">
                          <a class="nav-link" data-toggle="dropdown" href="#">
                            <i id="notification" class="far fa-bell">
                              <span class="badge navbar-badge">
                                {{ auth()->user()->unreadNotifications->count() }}
                              </span>
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header" style="padding-left:40px"> Notifications</span>
                            <div class="dropdown-divider"></div>
                          <a href="{{route('markReadNotification')}}" class="dropdown-item">
                                @foreach(auth()->user()->unreadNotifications as $index=>$notification)
                            @if($index<5)
                              <i class="fas fa-file mr-2"></i>
                               {{ $notification->data['data'] }}
                          <span class="float-right text-muted text-sm">
                            {{ $notification->created_at->diffForHumans() }}
                        </span>
                                    @endif
                                     @endforeach
                            </a>
                            {{-- <div class="dropdown-divider"></div> --}}
                            {{-- <a href="#" class="dropdown-item dropdown-footer" style="padding-left:60px">See All Notifications</a> --}}
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
                          <a href="{{route('supervisorprofile')}}" class="dropdown-item">
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
    @yield('content')
    <footer id="footer" class="bg-dark">
        <div class="py-3 text-center">
            <p> &copy; Copyright Udsm <span id="year"></span>, All rights reserved</>
        </div>
    </footer>
</div>

@yield('scripts')

{{-- custom js --}}
<script src="{{ asset('/js/custom/comment.js') }}"></script>
{{-- custom js ends here --}}

{{-- <!-- Jquery CDN --> --}}
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
</body>
</html>
