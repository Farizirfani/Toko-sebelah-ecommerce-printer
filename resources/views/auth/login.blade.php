@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center card-1 mx-3 my-5" style="padding-top: 6%; padding-bottom: 8%">
        <h1 class="text-center mb-2">Welcome To Toko Sebelah</h1>
        <div class="col-4 bg-dark rounded-3">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-5 offset-xl-1">
            <div class="text-start">
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            
                            <div class="col-md-7">
                                <label for="email" class=" col-form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            
                            <div class="col-md-7">
                                <label for="password" class=" col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        </div>

                        <div class="row mb-0">
                            <div class=" justify-content-between">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>
                            <div class="my-2">
                                <label for="">Dont have accout? click</label>
                                <a href="{{ url('/register') }}">Register</a>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
