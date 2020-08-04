<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/home.css')}}">
    <title>Home</title>
    <!-- Font Awesome CDN -->
<<<<<<< HEAD

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Google Fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Philosopher&family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300;500;700&family=Marmelad&family=Philosopher&family=Poiret+One&display=swap" rel="stylesheet">
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
<body>
<div id="page-container">

@include('ChallengeOwner.components.top-nav')

<div id="content-wrap">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
      <div class="item">
        <img src="images/th4.jpg" alt="" style="width:100%; height:500px;">
      </div>
    </div>
</div>
  
<main role="main">
  <div class="jumbotron">
      <h1 class="display-0">Welcome Challenge Driven Education Management System (CDEMS)</h1>
  
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>Upoload-Challenge</h2>
        <p>In this section you can upload your Challenge/Problem and will reach us then we will come up with concrete solution of your challenge/problem... </p>
       
      </div>
      <div class="col-md-4">
        <h2>Feeback</h2>
        <p>This section will help you as our customer to get the progress/project status and you will be able to write back your comment about the progress and if you have some changes you can add as a comment... </p>
        
      </div>
      <div class="col-md-4">
        <h2>Publication</h2>
        <p>Here you can see our publications about material related to what we are doing and other  education materials...</p>
        
      </div>
    </div>
    
<div class="container">
<h1>Our Partners</h1>
<div class="row" style="margin:0px;">

      <div class="col-md-3">
           
  <a href="https://www.udsm.ac.tz/"><img src="images/logo.png" class="img-rounded" alt="Cinque Terre" width="250" height="200"></a>
</div>

<div class="col-md-3">            
  <a href="https://dlab.or.tz/"><img src="images/th7.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236"> </a>
</div>
<div class="col-md-3">            
  <a href=""><img src="images/th5.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236"></a>
</div><div class="col-md-3">            
 <a href=""> <img src="images/th5.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236"> </a>

</div>
</main>
<footer id="footer" class="bg-dark" style="color:white" >
<div class="py-2 text-center">
<p> &copyright Udsm <span id="year"></span><script>
document.write(new Date().getFullYear());
</script>, All rights reserved</p>
</div>
</footer>

    </div>

  </div>
</div>


   

    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

=======
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
<div id="page-container">

@include('challenge-owner.component.top-nav')
<div id="content-wrap">

    <main role="main">
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-0">Welcome Challenge Driven Education Management System,(CDEMS)</h1>
          <p>CDE is a new education method which intends to enable students to identify problem in the communities and find the concrete solution,Aimed at enhancing a scalable working skills such as problem solving and team collaboration skills.</p>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Upoload-Challenge</h2>
            <p>In this section you can upload your Challenge/Problem and will reach us then we will come up with concrete solution of your challenge/problem... </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Feeback</h2>
            <p>This section will help you as our customer to get the progress/project status and you will be able to write back your comment about the progress and if you have some changes you can add as a comment... </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Publication</h2>
            <p>Here you can see our publications about material related to what we are doing and other  education materials...</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>
    </div>
    <footer id="footer" class="bg-dark" style="margin-top:520px;color:white" >
    <div class="py-2 text-center">
    <p> &copyright Udsm <span id="year"></span><script>
    document.write(new Date().getFullYear());
    </script>, All rights reserved</p>
    </div>
    </footer>
    </div>

  <!-- Jquery CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Bootstrap JS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

>>>>>>> 4eaf2b8a2919f60a04439ebed12107d4f95449d2
</body>
</html>

