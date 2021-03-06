@extends('layouts.adminmenu')
@section('content')
@php
    use App\User;
    use App\Student;
    use App\Coordinator;
    use App\Supervisor;
    use App\ChallengeOwner;
@endphp
    <header id="dashboard" class="pt-5 pb-3">
        <div class="container  pt-3 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1  style="color:#2874A6 ">
                        <i  class="fa fa-home text-dark" style="font-size: 30px;"></i> Home
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
                            <a href="{{route('createuser')}}" class="btn btn-outline btn-block text-light" style="background-color: #2874A6">
                                <i class="fas fa-plus text-light"></i> Create user
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
                                            <th>Role</th>
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
                                             {{$user->roles[0]->name}}
                                            </td>
                                            <td>
                                                <a href="{{ route("editUser", [$user->id]) }}" class="btn btn-secondary">
                                                    <i class="fas fa-angle-double-right"></i> Update User
                                                </a>
                                            </td>
                                            <td>
                                              </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <nav class="ml-4" style="color: #2874A6">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            {{$latestusers->links()}}
                                        </div>
                                    </div>
                                   </nav>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 bg-light text-center">
                                <div class="card-body">
                                    <h3 style="color: #2874A6">Users</h3>
                                    <h4 class="display-4" style="color: #2874A6">
                                        <i class="fas fa-users"></i>
                                         @php
                                          $user=User::get();
                                           echo count($user);
                                        @endphp
                                    </h4>
                                <a href="{{route('user-screen')}}" class="btn btn-outline text-light" style="background-color: #2874A6">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light text-center">
                                <div class="card-body">
                                    <h3 style="color: #2874A6">Supervisors</h3>
                                    <h4 class="display-4" style="color: #2874A6">
                                        <i class="fas fa-users"></i>
                                        @php
                               $supervisor= Supervisor::get();
                                      echo count($supervisor);
                                   @endphp
                                    </h4>
                                <a href="{{route('viewsupervisorsscreen')}}" class="btn btn-outline text-light" style="background-color: #2874A6">View</a>
                                </div>
                            </div>
                            <div class="card mb-3  text-light text-center" style="background-color: #2874A6">
                                <div class="card-body">
                                    <h3>Coordinators</h3>
                                    <h4 class="display-4">
                                        <i class="fas fa-users"></i>
                                        @php
                                        $coordinator=Coordinator::get();
                                      echo count($coordinator);
                                   @endphp
                                    </h4>
                                <a href="{{route('viewcoordinatorscreen')}}" class="btn btn-outline-light">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light text-center border-primary">
                                <div class="card-body">
                                    <h3 class="text-muted">Students</h3>
                                    <h4 class="display-4 text-muted">
                                        <i class="fas fa-user-graduate"></i>
                                        @php
                                        $student=Student::get();
                                      echo count($student);
                                   @endphp
                                    </h4>
                                <a href="{{route('viewstudentsscreen')}}" class="btn btn-secondary">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light text-center border" style="color: #2874A6">
                                <div class="card-body">
                                    <h3 class="text-muted">Challenge Owners</h3>
                                    <h4 class="display-4 text-muted">
                                        <i class="fas fa-users"></i>
                                        @php
                                        $challengeOwners=ChallengeOwner::get();
                                      echo count($challengeOwners);
                                   @endphp
                                    </h4>
                                <a href="{{route('viewChallengeOwners')}}" class="btn btn-secondary">View</a>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
