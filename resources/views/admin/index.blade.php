@extends('layouts.menu')
@section('content')
@php
    use App\User;
    use App\ChallengeOwner;
    use App\Student;
    use App\Supervisor;
@endphp
    <header id="dashboard" class="pt-3 pb-3">
        <div class="container  pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fas fa-cog text-dark"></i> Dashboard
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
                            <a href="{{url('createuser')}}" class="btn btn-outline-info btn-block">
                                <i class="fas fa-plus text-dark"></i> Create user
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
                                    <h4>Latest Users</h4>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($latestusers as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ url("editUser", [$user->id]) }}" class="btn btn-secondary">
                                                    <i class="fas fa-angle-double-right"></i> Details
                                                </a>
                                            </td>
                                            <td>
                                              </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 bg-light text-center">
                                <div class="card-body">
                                    <h3 class="text-info">Users</h3>
                                    <h4 class="display-4 text-info">
                                        <i class="fas fa-users"></i>
                                         @php
                                             $user=User::get();
                                           echo count($user);
                                        @endphp
                                    </h4>
                                <a href="{{url('/user-screen')}}" class="btn btn-outline-info">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light text-center">
                                <div class="card-body">
                                    <h3 class="text-info">Supervisors</h3>
                                    <h4 class="display-4 text-info">
                                        <i class="fas fa-users"></i>
                                        @php
                                        $supervisor=Supervisor::get();
                                      echo count($supervisor);
                                   @endphp
                                    </h4>
                                <a href="{{url('supervisors')}}" class="btn btn-outline-info">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-info text-light text-center">
                                <div class="card-body">
                                    <h3>Challenge Owners</h3>
                                    <h4 class="display-4">
                                        <i class="fas fa-users"></i>
                                        @php
                                        $challengeowner=ChallengeOwner::get();
                                      echo count($challengeowner);
                                   @endphp
                                    </h4>
                                <a href="{{url('challengeowners')}}" class="btn btn-outline-light">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light text-center border-info">
                                <div class="card-body">
                                    <h3 class="text-muted">Students</h3>
                                    <h4 class="display-4 text-muted">
                                        <i class="fas fa-user-graduate"></i>
                                        @php
                                        $student=Student::get();
                                      echo count($student);
                                   @endphp
                                    </h4>
                                <a href="{{url('students')}}" class="btn btn-secondary">View</a>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
