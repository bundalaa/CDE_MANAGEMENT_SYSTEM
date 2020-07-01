
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>permission-screen</title>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/students.css">
</head>
<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container">
            <a href="{{url('index')}}" class="navbar-brand">
                <img src="{{URL::asset('/images/logo.png')}}" alt="udsm logo" height="40" width="45">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="{{url('index')}}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{url('progress')}}" class="nav-link">Progress</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{url('schedule')}}" class="nav-link">Schedule</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{url('challenge')}}" class="nav-link">Challenges</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{url('publication')}}" class="nav-link">Publications</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{url('attendance')}}" class="nav-link">Attendance</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="#" class="nav-link">
                            <i id="notification" class="fa fa-envelope"
                style="padding-right: 10px;color:#797D7F">
                <span class="badge bg-danger">3</span></i></a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="#" class="nav-link">
                            <i  id="notification" class="fa fa-bell"
            style="padding-right: 10px;color:#797D7F">
            <span class="badge bg-danger">2</span></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i> Welcome Admin
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{url('profile')}}" class="dropdown-item">
                                <i class="fas fa-user-circle"></i> Profile
                            </a>
                            <hr class="solid">
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="dashboard" class="pt-2 pb-3">
        <div class="container  pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fa fa-tasks text-dark"></i> Add Permission
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <div id="page-container">
        <div id="content-wrap">
            <section id="add" class="py-4 bg-light">
                <h4 style="padding-left: 15px;">List of Users with access to this system</h4>
            </section>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Role</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Administrator</td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Supervisor</td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>  <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Student</td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Challenge Owner</td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <footer id="footer" class="bg-dark">
            <div class="py-3 text-center">
                <p> &copy; Copyright Udsm <span id="year"></span>, All rights reserved</p>
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
</body>

</html>
