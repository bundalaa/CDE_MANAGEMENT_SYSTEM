@extends('layouts.menu')
@section('content')
<header id="dashboard" class="pt-4 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
         <i class="fa fa-user" aria-hidden="true"></i>User Role
                </h1>
            </div>
        </div>
    </div>
</header>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-info">
                                <i class="fas fa-angle-double-right"></i> Edit
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-info">
                                <i class="fas fa-angle-double-right"></i> Delete
                            </a>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                    @endsection
