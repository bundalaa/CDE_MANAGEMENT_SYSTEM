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
    /* } */
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

    /*** [[End]] Left Nav ***/
    </style>
</head>


<body style="background:  #e6ecf0; width:100%">

    <div id="app">
        <div class="container-fluid">
            <div class="row">

                @include('challenge-owner.components.left-nav')

                <div class="col-lg-9" style="padding-left:0; padding-right: 0;">


                    @include('challenge-owner.components.top-nav-dashboad')

                    <!-- Content -->
                    <div class="container">
                        <main class="py-4">
                            <div class="row justify-content-center">
                                <div class="col-md-12">

                                    <div class="card" style="margin:5px;">
                                        <!-- HealthCare provider heading -->
                                        <div class="card-header">
                                            <div class="row">
                                                <div>
                                                    <h2>Upload-Challenge</h2>
                                                    <p>In this section you can upload your Challenge/Problem and
                                                        will reach us then we will come up with concrete solution of
                                                        your challenge/problem... </p>
                                                    <p><a class="btn btn-secondary" href="upload-file"
                                                            role="button">View details &raquo;</a></p>
                                                </div>
                                           <div>
                                                <h2>Approved Status </h2>
                                                <p>This section will help you as our customer to know the approved project and rejected project
                                                     </p>
                                                <p><a class="btn btn-secondary" href="/feedback" role="button">View details
                                                        &raquo;</a></p>
                                          </div>

                                          <div>

                                                <h2>Project Status</h2>
                                                <p>In tis section as a challenge owner you will be able to view the status of the current project and you can reply back by leaving a commect </p>
                                                <p><a class="btn btn-secondary" href="feedback" role="button">View details
                                                        &raquo;</a></p>
                                                        </div>
                                                <h2>Report Summary</h2>
                                                <p>Here you will be able to view the summary of the project from start to cunrrent state, this will help you as our cutomer to know the progress of the project  </p>
                                                <p><a class="btn btn-secondary" href="#" role="button">View details
                                                        &raquo;</a></p>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </main>
                    </div>

                    <footer id="footer" class="bg-dark" style="width:100%; float:right; margin-top:18px; color:white">
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
