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

    .card {
        width: 100%;
        background-color: gray;
    }

    /*** [[End]] Left Nav ***/
    </style>

</head>
<body style="background:  #e6ecf0; width:100%">



@foreach ($feedbacks as $key => $feedback)
<li class="chartData" style="display: none">{{ $feedback->name}}:{{$feedback->status}}:</li>
@endforeach

        <div class="container-fluid">
            <div class="row">

                    @include('challenge-owner.components.left-nav')

                    <div class="col-lg-9" style="padding-left:0; padding-right: 0;">





                        @include('challenge-owner.components.top-nav-dashboad')
                        <div class="container">

    <div class="column">
        <div class="card">
                                 <div class="card-header">
                                        <h4><strong> Project Progress Summary</strong></h4>
                                        <div style="float:right">
                                                                        {{-- <a href="{{ route('pdfview',['download'=>'pdf']) }}" class="btn btn-success mb-2" >Export PDF</a> --}}
                                                                        </div>
                                    </div>
                                    <div class="card-body">

                                    <canvas id="myChart" width="300" height="109"></canvas>


                                    </div>
                                    </div>
                                    </div>


                            <div id="content-wrap">
                                <div class="container-md"  style="margin-bottom:27px;">
                                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                                {!! Form::open(['route'=>'contactus.store']) !!}


                                    <div style="display: none;" class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">

                                    <input type="text" name="name" value=" {{ Auth::user()->name }}" class="form-control" id="" placeholder="Enter Employee Name">

                                    <input type="email" name="email" value=" {{ Auth::user()->email }}" class="form-control" id="" placeholder="Enter Employee Name">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>

                                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        {!! Form::label('Write your comment(s) and submit:') !!}
                        {!! Form::textarea('message', old('message'), ['class'=>'form-control',
                        'placeholder'=>'Enter Message', 'rows'=>'5']) !!}
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>

                                        <button type="submit" class="btn btn-info">Submit</button>
                                        {!! Form::close() !!}

                                </div>
                                </div>



                            </div>
                            <footer id="footer" class="bg-dark" style="color:white">
                                <div class="py-2 text-center">
                                    <p> &copyright Udsm <span id="year"></span>
                                        <script>
                                        document.write(new Date().getFullYear());
                                        </script>, All rights reserved
                                    </p>
                                </div>
                            </footer>
                        </div>
                        <!-- REQUIRED SCRIPTS -->
                        <!-- jQuery -->
                        <script src="plugins/jquery/jquery.min.js"></script>
                        <!-- Bootstrap -->
                        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <!-- overlayScrollbars -->
                        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                        <!-- AdminLTE App -->
                        <script src="dist/js/adminlte.js"></script>

                        <!-- OPTIONAL SCRIPTS -->
                        <script src="dist/js/demo.js"></script>

                        <!-- PAGE PLUGINS -->
                        <!-- jQuery Mapael -->
                        <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
                        <script src="plugins/raphael/raphael.min.js"></script>
                        <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
                        <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
                        <!-- PAGE SCRIPTS -->
                        <script src="dist/js/pages/dashboard2.js"></script>

<script>
    let chartData = document.querySelectorAll('.chartData');
    let datas = ''
    chartData.forEach(data => {
        datas += (data.textContent)
    })
    let dataArray = datas.slice(0, -1).split(':')
    let status = [], names = []
    for(let i = 0; i < dataArray.length; i++) {
       if (i % 2 == 0) {
           names.push(dataArray[i])
       }else {
           status.push(Number(dataArray[i]))
       }
    }
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: names,
        datasets: [{
            label: 'Project tasks',
            backgroundColor: 'rgb(250, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: status
        }]
    },

    // Configuration options go here
    options: {
      title: {
            display: true,
            text: 'Feedback bar chart'
        }
    }
});
</script>
    </body>

</html>
