@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-3 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="fa fa-user" aria-hidden="true"></i> Users
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
            <section id="add" class="py-4 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{route('adminIndex')}}" class="btn btn-muted btn-block">
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Home
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
                                    <h4>Latest Users</h1>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
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
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                               <nav class="ml-4">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        {{$users->links()}}
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
