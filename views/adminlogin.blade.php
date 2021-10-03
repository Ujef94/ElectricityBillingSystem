
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EBS Admin_Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/admin_login.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <h1>EBS Admin_Login Page!!</h1>
    <form action="{{ route('entry') }}" method="post">
        @csrf
        <div class='result'>
            @if($message = Session::get('sucessful'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
            @endif
        </div>
        <a href ="adminsignup">Already have account.!!</a>
        <div class = "danger">

        </div>
        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail')}}
        </div>
        @endif
        <div class="form">
            <input type="text" name="name" placeholder="Enter user name" value="{{old('name')}}"><br>
            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
            <br>
            <input type="password" name="password" placeholder="Enter user password"> <br>
            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
            <br>
            <input type="text" name="email" placeholder="Enter user Email"value="{{old('email')}}"><br>
            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            <br>
        </div>
        <center>
            <button class="btn">Submit</button>
            <input  class="btn" type = "reset" value="Reset"/>
        </center>
    </form>

</body>
</html>


