@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
<img src="{{URL::asset('/images/logos/logo.png')}}" alt="udsm logo" height="130" width="130"
    style="margin-left: 37%">
   <div class="card-title">
    <h1
    style="color:grey;font-size:23px;margin-left: 15%">UNIVERSITY OF DAR ES SALAAM</h1>
   </div>
<hr id="line">
   <div class="card-subtitle"> <h2 class="text-primary" style="font-size:20px;margin-left: 26%">
    Cde Management Platform
</h2 ></div>
    <hr style="margin: 0"px>
               <div class="mycard">
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
                            </div>
                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @enderror
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
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div></div>
            </div>
        </div>
    </div>
</div>
@endsection
