@extends('layouts.adminmenu')
@section('content')
    <header id="dashboard" class="pt-5 pb-3">
        <div class="container pt-3 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #2874A6">
                        <i class="fas fa-user text-dark"></i> Add User
                    </h1>
                </div>
            </div>
        </div>
    </header>
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
    <div id="page-container">
        <div id="content-wrap">
            <section id="admin-panel" class="pt-5">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body p-5">
                                    @if (session('info'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('info') }}
                </div>
            </div>
        </div>
    @elseif (session('error'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('error') }}
                </div>
            </div>
        </div>
    @elseif (session('message'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('message') }}
            </div>
        </div>
    </div>
@endif
                                <form action="{{route('createnewuser')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn" style="background-color: #2874A6">
                                                        <i class="far fa-user text-light"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="name" id="name"
                                                    class="form-control p-4" placeholder="Name">
                                            </div>
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="Email"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn" style="background-color: #2874A6">
                                                        <i class="far fa-envelope text-light"></i>
                                                    </button>
                                                </div>
                                                <input type="email" name="email" id="email" class="form-control p-4"
                                                    placeholder="Email address" >
                                            </div>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                        <input name="password" type="text"  hidden>
                                        <div class="form-group">
                                            <label for="name"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn text-light" style="background-color: #2874A6">
                                                        Role
                                                    </button>
                                                </div>
                                                <select style="color: #000;" name="role_id" class="form-control">
                                                    @foreach($roles as $role)
                                                <option selected value={{$role['id']}}>{{$role['name']}}</option>
                                                    @endforeach
                                                </select>
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
                    </div>
                </div>
            </section>
        </div>
@endsection
