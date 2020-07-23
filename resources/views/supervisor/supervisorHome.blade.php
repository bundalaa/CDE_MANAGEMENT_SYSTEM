@extends('layouts.supervisorMenu')
@section('content')
@php
    use App\Challenge;
    use App\Team;
@endphp
    <header id="dashboard" class="pt-4 pb-3 ">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i style="font-size: 30px;" class="fa fa-home text-dark"></i> Home
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <div id="page-container">
        <div id="content-wrap">
            <section id="add" class="py-4 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="viewcreatechallenge" class="btn btn-info btn-block">
                                <i class="fas fa-plus text-dark"></i> Add challenge
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="viewcreateteam" class="btn btn-outline-info btn-block">
                                <i class="fas fa-plus text-dark"></i> Create team
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            @if (session('message'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        @endif
            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card" id="card-table">
                                <div class="card-header">
                                    <h4>Latest Sub Challenges</h4>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($identifiedChallenges as $identifiedChallenge)
                                        <tr>
                                        <td>{{ $identifiedChallenge->id }}</td>
                                        <td>{{ $identifiedChallenge->name }}</td>
                                        <td>{{ $identifiedChallenge->description }}</td>
                                        <td>
                                            @if ($identifiedChallenge->status=='0')
                                                No group assigned
                                            @else
                                                Assigned to a group
                                            @endif
                                           </td>
                                        <td><a href="{{route('viewidentifiedchallengedetail',[$identifiedChallenge->id])}}" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 bg-light text-center">
                                <div class="card mb-3 bg-info text-light text-center">
                                    <div class="card-body">
                                        <h3>Challenges</h3>
                                        <h4 class="display-4">
                                            <i class="fas fa-folder-open"></i>
                                            @php
                                            $challenge=Challenge::get();
                                          echo count($challenge);
                                       @endphp
                                        </h4>
                                    <a href="{{route('challenge-screen')}}" class="btn btn-outline-light">View</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-info">Team</h3>
                                    <h4 class="display-4 text-info">
                                        <i class="fas fa-users"></i>
                                        @php
                                            $team=Team::get();
                                          echo count($team);
                                       @endphp
                                    </h4>
                                <a href="{{route('viewteam')}}" class="btn btn-outline-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection
