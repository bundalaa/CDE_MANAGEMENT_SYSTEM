@extends('layouts.menu')
@section('content')
<header id="dashboard" class="pt-3 pb-3">
    <div class="container  pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="display-4 text-dark"></i> Challenges
                </h1>
            </div>
        </div>
    </div>
</header>
    <div id="page-container">
        <div id="content-wrap">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($identifiedChallenges as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <p>
                        <td>{{ $category->description }}
                            <span id="dots">...</span><span id="more"></span></p>
<button onclick="myFunction()" id="myBtn" class="bg-info rounded-pill">Read more</button>
                        </td>
                    </tr>
                    @endforeach --}}
                </tbody>
              </table>
        </div>
    </div>
            @endsection
    {{-- <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");

          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
          }
        }
        </script> --}}

