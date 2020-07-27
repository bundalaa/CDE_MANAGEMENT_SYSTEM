@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-5 pb-1">
    <div class="container pt-2 pb-0">
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
            <table class="table table-striped m-0 p-0">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($challenges as $challenge)
                    <tr>
                        <td>{{ $challenge->id }}</td>
                        <td>{{ $challenge->name }}</td>
                        <p>
                        <td>{{ $challenge->description }}
                        </td>
                        <td>
                            <a href="{{ route('getidentifiedchallenges',[$challenge->id])}}" class="btn btn-secondary">
                                <i class="fas fa-angle-double-right"></i> Details
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
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

