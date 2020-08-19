@extends('layouts.supervisorMenu')
@section('content')
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #2874A6">
                        <i class="fas fa-user-circle text-dark"></i> Edit Profile
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
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Dashboard
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('getchangepassword')}}" class="btn btn btn-block" style="background-color: #2874A6">
                                <i class="fas fa-lock text-light"></i> Change Password
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
                    <div class="row pb-1">
                        <div class="col-md-9 mb-4 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body px-5">
                                    <form action="{{route('edituserprofile')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Username"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn" style="background-color: #2874A6">
                                                        <i class="far fa-user text-light"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="name" id="username"
                                                    class="form-control p-4" placeholder="Username"
                                                    value="{{auth()->user()->name}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-secondary">
                                                        <i class="far fa-envelope"></i>
                                                    </button>
                                                </div>
                                                <input type="email" name="email" id="email" class="form-control p-4"
                                                    placeholder="Email address" value=" {{auth()->user()->email}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" id="submit"
                                                class="form-control btn" style="background-color: #2874A6"><i class="fas fa-check-circle text-light"></i>
                                                Save
                                                Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pl-5">
                            @if(Auth::User()->avatar!='/images/default-avatar.png')
                            <img src="{{asset('/images/avatars/'.Auth::User()->avatar)}}" alt="" style="width:100px;margin-left:10px;height:100px;border-radius:50%">

                            @else
                            <img src="{{asset(Auth::User()->avatar)}}" alt="" style="width:100px;margin-left:10px;height:100px;border-radius:50%">

                            @endif
                        <form action="{{route('update-avatar')}}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                    <label for="img">Select image:</label>
                          <input type="file" id="avatarFile" name="avatar" class="form-control-file" style="padding-bottom:13px ">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                          <input  class="form-control btn btn btn-block" type="submit" style="background-color: #2874A6">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-danger btn-block"
                                        value="Delete Image">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer id="footer" class="bg-dark">
            <div class="py-3 text-center">
                <p> &copy; Copyright Udsm <span id="year"></span>, All rights reserved</p>
            </div>
            @endsection
