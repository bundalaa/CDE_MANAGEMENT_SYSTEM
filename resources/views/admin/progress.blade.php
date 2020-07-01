@extends('layouts.menu')
@section('content')
    <header id="dashboard" class="pt-3 pb-3">
        <div class="container  pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fas fa-cog text-dark"></i> Project Progress
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
            <div class="row pt-1">
                <div class="col-6">
                        <h4 style="padding: 40px 0px 0px 50px">Projects status</h4>

                </div>
                <div class="col-6">
                    <h4 style="padding: 40px 0px 0px 90px">Projects rate complation</h4>
                    <div id="piechart"></div>
                </div>
            </div>
        </div>
        @endsection
    {{-- <footer id="footer" class="bg-dark">
        <div class="py-3 text-center">
            <p > &copy; Copyright Udsm <span id="year"></span>, All rights reserved</p>
        </div>
    </footer>
        </div>
    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script>
        // Get Full Year
        $('#year').text(new Date().getFullYear());
    </script>
    <!--pie chart script-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['water quality', 8],
  ['enrollment system', 2],
  ['payrol system', 4],
  ['pipelining', 2],
  ['opras', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':580, 'height':410};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</body>
</html> --}}
