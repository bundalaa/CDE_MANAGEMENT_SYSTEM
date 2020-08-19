

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title {{ config('app.name', 'Laravel') }} -->
    <title>Challenge owner</title>

    <!-- Scripts {{ config('app.name', 'Laravel') }} -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/widgets.css') }}" rel="stylesheet">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/home.css')}}">
    <title>Home</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> 
    <style>
    /*** Left Nav ***/
    .nav-link.active {
        background: #D1F2EB !important;
        border-color: #D1F2EB !important;
    }

    .logo-text {
        text-align: center;
        color: #fff;
    }

    .section-divider {
        height: 2px;
        background: #dddddd;
        margin-top: 4em
    }

    .section-heading {
        background: #dddddd;
        margin-bottom: 1em;
        display: inline-block;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
    }

    .section-heading h5 {
        color: #414141;
        padding: 4px 1em;
        margin: 0
    }

    .new-employee-wrapper {
        padding: 1em;
        border: 2px dashed #cccccc;
        background: #f4f4f1;
        margin-top: 2em;
    }

    .content-wrapper {
        padding: 1em;
        border-left: 1px solid #cccccc;
        border-right: 1px solid #cccccc;
        border-bottom: 1px solid #cccccc;
    }

    .list-wrapper {
        padding: 1em;
    }

    /* 
        .navbar-nav{

            /*background: #ffa23b;*/
 */
    */ .nav-item-heading {
        border-bottom: 1px solid #fff8b3;
        border-bottom-left-radius: 8px;
        color: #fff;
        padding: 0.2em;
        margin-top: 1em;
        width: 100%;

    }

    .left-menu-link {
        color: #eeeeee !important;
    }

    .card {
        width: 100%;
        background-color: gray;
    }

    /*** [[End]] Left Nav ***/
    </style>

</head>
<body style="background:  #e6ecf0; width:100%">
        <div class="container-fluid">
            <div class="row  ">

                    @include('challenge-owner.components.left-nav')

                    <div class="col-lg-9" style="padding-left:0; padding-right:0;">





                        @include('challenge-owner.components.top-nav-dashboad')
    <div class="container">



<hr>
<div class="container bootstrap snippet">
    
  	
           @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('message'))

                    <div class="alert alert-success alert-block">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>
               </div>
                @endif
          <div class="row ">
          
    	   <div class="col-sm-9">
           <div class="tab-content">
            <div class="tab-pane active" id="home">
            <div class="row pb-1">
                        <div class="col-md-9 mb-4 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit your Profile</h4>
                                </div>
                                <div class="card-body px-5">
                                    <form action="/PasswordChange" method="POST">
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
                                            <label for="Current Password"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-secondary">
                                                        <i class="fa fa-key"></i>
                                                    </button>
                                                </div>
                                                <input type="password" name="old-pass" id="password" class="form-control p-4"
                                                    placeholder="Current Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="New Password"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-secondary">
                                                        <i class="fa fa-key"></i>
                                                    </button>
                                                </div>
                                                <input type="password" name="new-pass" id="password" class="form-control p-4"
                                                    placeholder="New Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Confirm Password"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-secondary">
                                                        <i class="fa fa-key"></i>
                                                    </button>
                                                </div>
                                                <input type="password" name="confirm-pass" id="password" class="form-control p-4"
                                                    placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" id="submit"
                                                class="form-control btn-info"><i class="fas fa-check-circle"></i>
                                                Save
                                                Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</div>
                    </div>

                    <footer id="footer" class="bg-dark" style="width:100%; float:right; margin-top:0px; color:white">
                        <div class="py-2 text-center">
                            <p> &copyright Udsm <span id="year"></span>
                                <script>
                                document.write(new Date().getFullYear());
                                </script>, All rights reserved
                            </p>
                        </div>
                    </footer>
                </div>
            </div>



</body>
</html>
                                                      