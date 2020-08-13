@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-5 pb-1">
    <div class="container pt-2 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="fas fa-folder-open  text-dark"></i> Challenges
                </h1>
            </div>
        </div>
    </div>
</header>
    <div id="page-container">
        <div id="content-wrap">
            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-md-12 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card" id="card-table">
                                <div class="card-header">
                                    <h4>Challenges</h4>
                                </div>
            <table class="table table-striped">
                 <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
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
                <nav class="ml-4">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        {{$challenges->links()}}
                                    </div>
                                </div>
                               </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
            @endsection

