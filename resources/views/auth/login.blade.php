@extends('layouts.app')
 {{-- @include('challenge-owner.components.top-nav') --}}
 @include('layouts.homeNav')

{{-- @push('head')
<link href="{{ asset('css/Auth/custom.css') }}" rel="stylesheet">
@endpush --}}

@section('content')
<div id="page-container">
    <div id="content-wrap">


        {{--direct me to previous footer, just go ans open it   --}}
<div class="container" style="padding-top: 20px">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align: center;font-size:15px">{{ __('Login') }}</div>
<img src="{{URL::asset('/images/logos/logo.png')}}" alt="udsm logo" height="130" width="130"
    style="margin-left: 40%">
   <div class="card-title">
    <h1
    style="color:grey;margin-left: 17%;  font-size:23px">UNIVERSITY OF DAR ES SALAAM</h1>
   </div>
<hr id="line">
   <div class="card-subtitle"> <h2  style="font-size:20px;margin-left: 20%;color:#2874A6">
    Cde Information Management System
</h2 ></div>
    <hr style="margin: 0"px>
               <div class="mycard" >
                   <div class="card-body">

                <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                      <i class="fas fa-user"></i>
                                  </div>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                      <i class="fas fa-lock"></i>
                                  </div>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
               </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary" >
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: black">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="text-center">If you have an account?
                        <a class="small" href="{{ __('register')}}" style="color: black">Sign Up</a></div>
                </form>
            </div></div>
            </div>
        </div>
    </div>
</div>
<br>



@endsection
</div>
</div>
