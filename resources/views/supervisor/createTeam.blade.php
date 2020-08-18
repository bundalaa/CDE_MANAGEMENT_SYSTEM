@extends('layouts.supervisorMenu')
@section('content')
@php
    use App\User;
@endphp
<header id="dashboard" class="pt-4 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="fas fa-users text-dark"></i> Create Team
                </h1>
            </div>
        </div>
    </div>
</header>
@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button>

    <strong>{{ $message }}</strong>

</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div id="page-container">
    <div id="content-wrap">
        <section id="admin-panel" class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Create Team</h4>
                            </div>
                            <div class="card-body px-5">
                            <form action="{{route('createteam')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name"></label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn btn-info">
                                                   challenge
                                                </button>
                                            </div>
                                            <select style="color: #000;" name="identified_challenge_id" class="form-control" id="">
                             @foreach ($challenges as $challenge)
                                            <option value="{{$challenge->id}}"> {{$challenge->name}} </option>
                             @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"></label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn btn-info">
                                                    Supervisor
                                                </button>
                                            </div>
                                            <select style="color: #000;" name="supervisor_id" class="form-control" id="">
                             @foreach ($supervisors as $supervisor)
                                            <option value="{{$supervisor->id}}"> {{$supervisor->user->name}} </option>
                             @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group py-4">
                                        <button type="submit" name="submit" id="submit"
                                            class="form-control btn-info"><i class="fas fa-check-circle"></i>
                                           Submit
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
