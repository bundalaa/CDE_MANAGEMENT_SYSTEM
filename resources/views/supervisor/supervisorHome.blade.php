@extends('layouts.supervisorMenu')
@section('content')
@php
    use App\IdentifiedChallenge;
    use App\Team;
@endphp
    <header id="dashboard" class="pt-4 pb-3 ">
        <div class="container pt-5 pb-0">
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
                            <a href="createteam" class="btn btn-outline-info btn-block">
                                <i class="fas fa-plus text-dark"></i> Create team
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="createcategory" class="btn btn-info btn-block">
                                <i class="fas fa-plus text-dark"></i> Add category
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card" id="card-table">
                                <div class="card-header">
                                    <h4>Latest Categories</h4>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Musical</td>
                                            <td>30 May 2020</td>
                                            <td>
                                                <a href="categoryDetail" class="btn btn-secondary">
                                                    <i class="fas fa-angle-double-right"></i> Details
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 bg-light text-center">
                                <div class="card mb-3 bg-info text-light text-center">
                                    <div class="card-body">
                                        <h3>Categories</h3>
                                        <h4 class="display-4">
                                            <i class="fas fa-folder-open"></i>
                                            @php
                                            $identifiedchallenge=IdentifiedChallenge::get();
                                          echo count($identifiedchallenge);
                                       @endphp
                                        </h4>
                                        <a href="category-screen" class="btn btn-outline-light">View</a>
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
                                    <a href="viewteam" class="btn btn-outline-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection
