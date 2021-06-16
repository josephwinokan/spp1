

@section('content')
    <!-- <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">
    <div class="card">
    <div class="card-header">{{ __('Register') }}</div> -->

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
        <a href="{{ route('login') }}">login</a>
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
                height: 440px;
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

            .login-box input[type="password"],input[type="email"],input[type="text"]{
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
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
        <label for="name" type="text" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

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
    </div><br>
    <div class="log">
            <a href="{{ route('login') }}" type="log">login</a>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
