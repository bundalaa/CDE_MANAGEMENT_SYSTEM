@extends('layouts.supervisorMenu')
@section('content')
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #2874A6">
                        <i class="fas fa-folder-open text-dark"></i> Sub Challenges
                    </h1>
                </div>
            </div>
        </div>
    </header>
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
    <div id="page-container">
        <div id="content-wrap">
            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-md-12 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card" id="card-table">
                                {{-- <div class="card-header">
                                    <h4>Sub Challenges</h1>
                                </div> --}}
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th></th>
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
                                        <td style="width: 300px"><a href="{{route('viewidentifiedchallengedetail',[$identifiedChallenge->id])}}" class="btn btn" style="background-color: #2874A6">
                                            <i class="fas fa-edit text-light"></i>Update Sub Challenge
                                        </a>
                                    </td>
                                      <td style="width: 200px">
                                        <a href="{{route('viewFillProgress',[$identifiedChallenge->id])}}" class="btn btn" style="background-color: #2874A6">
                                            <i class="fa fa-plus-circle text-light"></i>Fill progress
                                        </a>
                                      </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- <nav class="ml-4">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            {{$challenges->links()}}
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
