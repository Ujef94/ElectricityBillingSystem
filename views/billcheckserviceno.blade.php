<!DOCTYPE html>
<html lang="en">
<head>
<title>EBS Bill Generate.</title>
    <link rel="stylesheet" href="{{ asset('css/checkserviceno.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
<h1>Form for Genrate Bill!!</h1>
    <form action="{{route('check_services')}}" method="post">
        @csrf

        <div class='result'>
            @if(Session::get('sucessful'))
                <div class="alert alert-success">
                    {{ Session::get('success')}}
                </div>
            @endif
        </div>
        <h3>Enter Recommended Details.!!</h3>
             @if(Session::get('fail'))
                <div class="danger">
                    {{ Session::get('fail')}}
                </div>
            @endif
            <div class="form">


            <input type="serviceno" name="serviceno" placeholder="Enter user ServiceNo">
            <br>
            <span class="text-danger">@error('serviceno') {{ $message }} @enderror</span>
            <br>

        </div>
        <center>

            <button class="btn">Submit</button>
            <input  class="btn" type = "reset" value="Reset"/>
       </center>
    </form>

</body>
</html>
