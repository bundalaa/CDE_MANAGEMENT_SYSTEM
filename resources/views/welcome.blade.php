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
    <link
        href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Philosopher&family=Poiret+One&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Marmelad&family=Philosopher&family=Poiret+One&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .img-rounded {
        border-radius: 60%;
        height: 200px;
        width: 200px;
        font-family: 'Philosopher', sans-serif;
    }
    </style>

</head>

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

      <div class="row">
      <div class="col-lg-6">
      <div class="main_bg"><!-- start main -->
        <div class="container">
            <div class="about row" style="margin: 5px">
                <h2>About us</h2>
                <p class="text-justify">Challenge-Driven Education(CDE) is an education for sustainable development approach, which aims to prepare students to work with global challenges and to bring value to society by direct impact.The Challenge Driven education introduced at University of Dar es salaam within
                    engineering education in collaboration with the Royal Institute of Technology,KHT in Stockholm.</p>
                <p class="text-justify">In Challenge-Driven Education the idea is to provide students opportunities collaborate with societal stakeholders on developing solutions to various societal challenges.The Challenge Driven Education collaborate with society to provide solution to different challenges.</p>
                {{-- <a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a> --}}
                <div class="row">
                    <div class="col-md-6">
                        <h2>Our history</h2>
                        <p class="text-justify">The Challenge Driven education at university of Dar es salaam, within the engeneering education started through collaboration with the KHT Royal institute of
                            technology, Sweden. Previous collaborations between the two have been targeting research,development and PhD education.In 2014 the idea emerged to also collaborate on first and second cycle
                            education,with the vision of mutual capacity building through joint development and implementation of challenge-driven education
                            (CDE).The idea was to provide students from the two universities opportunities to collaborate with
                            each other and societal stakeholders on developing solutions to various societal challenges in the two
                            countries.</p>

                    </div>
                    <div class="col-md-6">
                        <strong>
                            <h2>Our Mission</h2>
                        </strong>
                        <p class="text-justify">To provide students from the university of Dar es salaam opportunities to collaborate with
                            each other and societal stakeholders on developing solutions to various societal challenges in the
                            country </p>

                    </div>
                    {{-- <div class="col-md-3">
                        <strong>
                            <h2>Our Vision</h2>
                        </strong>
                        <p>This section will help you as our customer to get the progress/project status and you
                            will be able to write back your comment about the progress and if you have some
                            changes you can add as a comment... </p>

                    </div> --}}
                </div>
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

                <div style="padding-top: 10px" class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
            </div>
            </form>
          </div>
          {{-- <div class="col-lg-6"> --}}
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
          {{-- </div> --}}
      </div>
      </div>
      <div class="row" style="margin: 5px">
      <div class="col-lg-12" >
        <h2>Location</h2>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=collenge%20of%20information%20and%20communication%20technologies&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
       </div><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
      </div>
      </div>
                <div class="container">
                    <h1>Our Partners</h1>
                    <div class="row" style="margin:0px;">
                        <div class="col-md-3">

                            <a href="https://www.udsm.ac.tz/"><img src="images/logo.png" class="img-rounded"
                                    alt="Cinque Terre" width="250" height="200"></a>
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
    {{-- </div>
    </footer> --}}
    </div>

  <!-- Jquery CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Bootstrap JS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

</body>

</html>
