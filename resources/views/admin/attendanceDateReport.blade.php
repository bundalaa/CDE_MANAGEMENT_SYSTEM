@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-5 pb-3">
    <div class="container  pt-3 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="far fa-address-book text-dark"></i>  Attendance Date Report
                </h1>
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
                                    <div class="row">
                                        <div class="col-4"><h4>Class Date Attendance</h4>
                                        </div>
                                        <div class="col-8">
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
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Attendance Date_Taken</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <!-- Pagination -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection
