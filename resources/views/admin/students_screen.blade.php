@extends('layouts.adminmenu')
@section('content')
@php
    // use App\Role;
    use App\Team;
@endphp
<header id="dashboard" class="pt-3 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="fa fa-user" aria-hidden="true"></i> Students
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
                            <a href="{{url('adminIndex')}}" class="btn btn-muted btn-block">
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Dashboard
                            </a>
                        </div>
                        <div class="col-md-6 ml-auto">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Users...">
                                <div class="input-group-append">
                                    <button class="btn btn-info">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-md-12">
                            <div class="card" id="card-table">
                                <div class="card-header">
                                    <h4>Latest Students</h1>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Team</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $number = 1;
                                    @endphp
                                        @foreach($students as $students)
                                        <tr>
                                            <td>
                                                {{$number}}
                                            </td>
                                             <td>{{ $students->name }}</td>
                                             @php
                                             $number++;
                                         @endphp
                                            {{-- @php
                                            $teams = Team::get();
                                        @endphp
                                        <td>{{ $teams['name'] }}</td>
                                            <td>{{ $teams->id }}</td> --}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                               {{-- <nav class="ml-4">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        {{$users->links()}}
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
