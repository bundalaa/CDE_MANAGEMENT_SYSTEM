@extends('layouts.app')
{{-- @include('challenge-owner.components.top-nav') --}}
@include('layouts.homeNav')

@section('content')
<div id="page-container">

<div class="container" style="padding-top: 20px">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align: center;font-size:15px">{{ __('Register') }}</div>
                <img src="{{URL::asset('/images/logos/logo.png')}}" alt="udsm logo" height="130" width="130"
                style="margin-left: 40%">
               <div class="card-title">
                <h1
                style="color:grey;margin-left: 16%;  font-size:23px">UNIVERSITY OF DAR ES SALAAM</h1>
               </div>
            <hr id="line">
            <div class="card-subtitle"> <h2 class="text-primary" style="font-size:20px;margin-left: 20%;color:#2874A6">
                Cde Information Management System
            </h2 ></div>
            <div class="mycard">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="text-center">Already i have an account?
                            <a class="small" href="{{ __('login')}}" style="color: black">Sign In</a></div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
