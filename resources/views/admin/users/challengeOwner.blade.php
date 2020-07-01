@extends('layouts.menu')
@section('content')
@php
    use App\Role;
@endphp
<header id="dashboard" class="pt-4 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="fa fa-user" aria-hidden="true"></i> ChallengeOwners
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
                            <a href="{{url('index')}}" class="btn btn-muted btn-block">
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
                        <div class="col-md-8">
                            <div class="card" id="card-table">
                                <div class="card-header">
                                    <h4>Latest challengeowners</h1>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($challengeowners as $challengeowner)
                                        <tr>
                                            <td>{{ $challengeowner->id }}</td>
                                            <td>{{ $challengeowner->name }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Pagination -->
                                <nav class="ml-4">
                                    <ul class="pagination">
                                        <li class="page-item-disabled">
                                            <a href="#" class="page-link">Prev</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection
