@extends('layouts.menu')
@section('content')
<header id="dashboard" class="pt-3 pb-3">
    <div class="container  pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="far fa-address-book text-dark"></i>  Attendance
                </h1>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Attendance per date...">
                    <div class="input-group-append">
                        <button class="btn btn-info">Search</button>
                    </div>
                </div>
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
                                    <h4>Class Attendance | <span class="text-info">Fri 14 apr 2020</span></h1>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Student-name</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attendances as $attendance)
                                        <tr>
                                            <td>{{ $attendance->id }}</td>
                                            <td>{{ $attendance->name }}</td>
                                            <td>{{ $attendance->status }}</td>
                                            <td>{{ $attendance->date}}</td>
                                            <th></th>
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
                                <div class="ml-auto mr-3 mb-3">
                                    <button class="btn btn-secondary px-3"><i class="fas fa-print"></i> Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection
