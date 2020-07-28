@extends('layouts.supervisorMenu')
@section('content')
@php
    use App\IdentifiedChallenge;
    use App\User;
@endphp
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fas fa-users text-dark"></i> Teams
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
                        <div class="col-md-6 ml-auto">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Team...">
                                <div class="input-group-append">
                                    <button class="btn btn-info">Search</button>
                                </div>
                            </div>
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
                    <div class="row pb-3">
                        <div class="col-md-12 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card" id="card-table">
                                <div class="card-header">
                                    <h4>Latest Teams</h1>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Supervisor</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($teams as $teams)
                                        <tr>
                                        <td>{{ $teams->id }}</td>
                                        <td>
                                            @php
                                                $challenge = IdentifiedChallenge::where('id',$teams->identified_challenge_id )->first();
                                                $supervisor = User::where('id',$teams->supervisor_id )->first();
                                            @endphp
                                            {{ $challenge['name'] }}</td>
                                        <td>{{ $supervisor['name']}}</td>
                                        <td>
                                            <a href="{{route('viewaddstudentpage',[$teams->id])}}" class="btn btn-secondary">
                                                <i class="fas fa-angle-double-right"></i> Add Students
                                            </a>
                                        <a href="{{route('viewteamDetail',[$teams->id])}}" class="btn btn-info">
                                                    <i class="fas fa-angle-double-right"></i> Team Details
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Pagination -->
                                {{-- <nav class="ml-4">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            {{$teams->links()}}
                                        </div>
                                    </div>
                                   </nav> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
       @endsection