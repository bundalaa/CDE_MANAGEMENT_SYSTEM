@extends('layouts.adminmenu')
@section('content')
    <header id="dashboard" class="pt-3 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #2874A6">
                       <i class="fa fa-lock text-dark" aria-hidden="true"></i></i> Password
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
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Home
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row pt-1">
                        <div class="col-md-12 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card" id="card-table">
                                <div class="card-header">
                                    <h4>Change Password</h4>
                                </div>
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
                                <div class="card-body px-5">
                                <form action="{{url('changepassword')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label for="Current Password"></label>
                                            <input type="password" name="old-pass" id="password"
                                                class="form-control p-4" placeholder="Current Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="New Password"></label>
                                            <input type="password" name="new-pass" id="password-2"
                                                class="form-control p-4" placeholder="New Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Confirm password"></label>
                                            <input type="password" name="confirm-pass" id="password-3"
                                                class="form-control p-4" placeholder="Confirm Password" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" id="submit"
                                                class="form-control btn" style="background-color: #2874A6"><i class="fas fa-check-circle"></i>
                                                Save
                                                Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection
