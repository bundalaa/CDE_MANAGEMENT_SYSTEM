@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-3 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="fa fa-users" aria-hidden="true"></i> Students
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
                            <a href="{{route('adminIndex')}}" class="btn btn-muted btn-block">
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Home
                            </a>
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
                                            <th>Student Name</th>
                                         <th>Registration No.</th>
                                         <th>Year of study</th>
                                         <th>Degree of programme</th>
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
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                               <nav class="ml-4">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        {{$students->links()}}
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
