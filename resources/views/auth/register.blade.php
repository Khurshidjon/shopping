<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" type="javascript"></script>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Document</title>
</head>
<body class="bg-image bg-parallax animatebottom" id="myDiv" onload="myFunction()" style="background: url({{asset('auth-images/8.jpg')}}); background-size: cover">
<div class="container-fluid">
    <div class="row">
        <div id="reg-form" class="col-md-6">
            <form action="{{route('register')}}" method="post" style="position: fixed; margin-top: 8em">
                @csrf
                <i class="fa fa-user-circle" style="font-size: 10em; color: bisque"></i>
                <div class="form-group">
                    <label for="full_name"></label>
                    <input id="full_name" type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required placeholder="Fullname" value="{{old('name')}}">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input id="email" name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="Email" value="{{old('email')}}">
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
                <div class="form-group">
                    <label for="password-confirm"></label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm password">
                </div>

                <button type="submit" class="btn btn-block btn-outline-dark">Register</button>

            </form>
        </div>
        <div id="img" class="col-md-6">
            <h1 class="rotated text-dark">Sign Up</h1>
            <a href="/login" style="text-decoration: none" class="text-dark">I have a account already</a>
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