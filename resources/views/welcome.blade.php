<!DOCTYPE html>
<html lang="en">

<head>
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
<style>
#page-container{
 background-color: whitesmoke;

}
</style>
</head>
<body>
<div id="page-container">

@include('layouts.homeNav')
<div id="content-wrap">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="item">
            <img src="{{URL::asset('/images/homepage.jpg')}}" alt="" style="width:100%; height:400px;">
        </div>
    </div>
    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{URL::asset('/images/det_pic.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="color: black;">First caption</h5>
                <p style="color:black;">We serve with Quality</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{URL::asset('/images/pic1.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{URL::asset('/images/pic1.jpg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> --}}
      <div class="row">
      <div class="col-lg-6">
      <div class="main_bg"><!-- start main -->
        <div class="container">
            <div class="about row">
                <h2>About us</h2>
                <p class="text-justify">Challenge-Driven Education(CDE) is an education for sustainable development approach, which aims to prepare students to work with global challenges and to bring value to society by direct impact.The Challenge Driven education introduced at University of Dar es salaam within
                    engineering education in collaboration with the Royal Institute of Technology,KHT in Stockholm.</p>
                <p class="text-justify">In Challenge-Driven Education the idea is to provide students opportunities collaborate with societal stakeholders on developing solutions to various societal challenges.The Challenge Driven Education collaborate with society to provide solution to different challenges.</p>
                {{-- <a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a> --}}
            </div>
        </div>
    </div>
      </div>
      <div class="col-lg-6">
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
        <div class="contact-form">
          <h2>Contact Us</h2>
            <form action="ContactMessage" method="post">
                @csrf
              <div>
                <span>name</span>
                <span><input type="name" name="name" class="form-control" id="userName"></span>
              </div>
              <div>
                <span>e-mail</span>
                <span><input type="email" name="email" class="form-control" id="inputEmail3"></span>
              </div>
              <div>
                <span>message</span>
                <span><textarea name="message" class="form-control"></textarea></span>
              </div>
             <div>

                <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
            </div>
            </form>
          </div>
      </div>
      <div class="col-lg-6">
        <h2>Location</h2>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=collenge%20of%20information%20and%20communication%20technologies&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
       </div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
      </div>
      <div class="col-lg-6">
        <blockquote class="quote-box">
            <p class="quotation-mark">
              “
            </p>
            <p class="quote-text">
                Challenge Driven Education is an approach to increase students’ impact to community.
            </p>
            <p class="quotation-mark">
                ,,
              </p>
            <hr>
          </blockquote>
      </div>
      </div>
      <div class="container">
          <h1>Our Partners</h1>
          <div class="row" style="">
            <div class="col-md-3">
                <a href="https://www.udsm.ac.tz/">
                <img src="{{URL::asset('/images/logo.png')}}" class="img-rounded" alt="Cinque Terre" width="150" height="130"></a>
            </div>
            <div class="col-md-3">
                <a href="https://www.udsm.ac.tz/">
                <img src="{{URL::asset('/images/udcti.jpg')}}" class="img-rounded" alt="Cinque Terre" width="150" height="130"></a>
            </div>
            <div class="col-md-3">
                <a href="https://dlab.or.tz/">
                <img src="{{URL::asset('/images/dlab.png')}}" class="img-rounded" alt="Cinque Terre" width="150" height="130"></a>
            </div>
            <div class="col-md-3">
                <a href="https://y4chub.tech">
                <img src="{{URL::asset('/images/y4c.png')}}" class="img-rounded" alt="Cinque Terre" width="150" height="130"></a>
            </div>
        </div>
      </div>
     <br>
    </div>
    <footer id="footer" class="bg-dark">
        <div class="py-3 text-center">
        <p> &copy;Copyright Udsm <span id="year"></span>20<?php echo date('y');?>, All rights reserved</>
        </div>
        </footer>
    </div>
    </div>

  <!-- Jquery CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Bootstrap JS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

</body>

</html>
