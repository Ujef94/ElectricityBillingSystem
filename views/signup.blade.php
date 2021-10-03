<!DOCTYPE html>
<html lang="en">

<head>
    <title>EBS SignUp Page</title>
    <link rel="stylesheet" href="{{ asset('css/Signup.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

    <h1>EBS SignUp Page!!</h1>
    <form action="{{ route('check') }}" method="post">

        @if(Session::get('sucessful'))
        <div class="alert alert-success">
            {{ Session::get('success')}}
        </div>
        @endif

        <a href="login">Create new account.!!</a>
        <div class="danger">
        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail')}}
        </div>
        @endif
        </div>

        @csrf
        <div class="form">

            <input type="text" name="email" placeholder="Enter user Email" value="{{old('email')}}"><br>
            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            <br>
            <input type="password" name="password" placeholder="Enter user password">
            <br>
            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
            <br>

        </div>
        <center>

            <button class="btn">Submit</button>
            <input class="btn" type="reset" value="Reset" />
        </center>
    </form>

</body>

</html>
