<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" type="javascript"></script>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>LogIN</title>
</head>
<body class="bg-image bg-parallax" id="myDiv" onload="myFunction()" style="background: url({{asset('auth-images/9.jpg')}}); background-size: cover;" >
<div class="container-fluid">
    <div class="row">


        <div id="login-form" class="col-md-6">
            <form action="{{route('login')}}" method="post">
                @csrf
                <i class="fa fa-user-circle mb-3" style="font-size: 10em; color: bisque"></i>
                <div class="form-group">
                    <label for="email"></label>
                    <input id="email" name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password"></label>
                    <input id="password" type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-outline-light btn-block">Sign in</button>
                <a href="{{ route('password.request') }}" style="text-decoration: none;" class="text-light">
                    {{ __('Forgot Your Password?') }}
                </a>
            </form>
        </div>
        <div id="img" class="col-md-6">
            <h1 class="rotated text-light">Sign In</h1>
            <a href="/register" style="text-decoration: none" class="text-light">Create a new account</a>

        </div>
    </div>

</div>
<div id="loader"></div>
<script>
    var myVar;
    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }
    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>
</body>
</html>