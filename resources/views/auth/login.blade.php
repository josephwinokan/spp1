<!-- kurang@extends('layouts/app') -->

@section('content')
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">
    <div class="card">
    <div class="card-header">{{ __('Login') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
    <div class="row">
        <div class="col">
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
    
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection


<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
         html, body {
                width: 0px;
                height: 100vh;
                background: url(css/hail.jpg);
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                position: absolute;
                margin-bottom: 0px;
                padding: 0px;
                font-family:sans-serif;  
            }
            .links > a {
                color: black;
                padding: 0 15px;
                font-size: 33px;
                font-weight: 400;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                width: 420px;
                
            }

            .login-box{
                width: 400px;
                height: 300px;
                background: rgba(0,0,0,0.5);
                color: #fff;
                top: 50%;
                left: 50%;
                position: absolute;
                box-sizing: border-box;
                padding: 25px;
                transform: translate(50%,-50%);
                }

                .login-box input{
                width: 100%;
                margin-bottom: 20px;
            }

            .login-box input[type="password"],input[type="email"]{
                border: none;
                border-bottom: 1px solid#fff;
                background: transparent;
                outline: none;
                height: 40px;
                color: #fff;
                font-size: 16px;
            }

            .login-box button[type="submit"]{
                border: none;
                outline: none;
                height: 30px;
                width: 350px;
                font-size: 18px;
                color: #fff;
                border-radius: 20px;
                background: black;
            }

            .login-box button[type="submit"]:hover{
                cursor: pointer;
                background: #e33d56 ;
                color: #fff;

            }

            .avatar {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                position: absolute;
                top: -50px;
                left: calc(86% - 50%);
            }


    </style>
</head>
<body>
<div class="container">

    <div class="login-box" id="login-box">

    <div class="avatar" id="avatar">
        <img src="{{ ('css/avatar2.png') }}" width="100px"  >
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

    <div class="form-group row">
        <label for="email">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>

    <div class="form-group row">
        <label for="password">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        </div>

        <div class="form-group row">
        <div class="form-group row mb-0">

                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary" for="submit">
                        {{ __('Login') }}
                    </button>
                    
                    
        </div>
        </div>

        <div class="col-md-6 offset-md-4">
        <div class="form-check">
                <!-- @if (Route::has('password.request'))
                <br>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif -->


            <!-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" type="checkbox" for="remember">
                {{ __('Remember Me') }}
            </label> -->

        </div>
        </div>
        </div>
<br>
    <!-- <a href="{{ route('register') }}">Register</a> -->
    </div>
    </form>


    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>