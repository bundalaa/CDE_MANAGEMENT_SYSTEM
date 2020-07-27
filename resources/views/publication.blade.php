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
@include('ChallengeOwner.components.top-nav')
<div id="page-container">

<div id="content-wrap">

</div>
<footer id="footer" class="bg-dark" style="margin-top:526px;color:white" >
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

</body>
</html>

