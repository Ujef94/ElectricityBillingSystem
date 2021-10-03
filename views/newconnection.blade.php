<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Connection.</title>
    <link rel="stylesheet" href="/css/newconnection.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <h3 style="color:white">EBS CompanyLtd.</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/profile">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/Business-Area">Business Areas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beyond Business</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/viewcheckserviceno">View Bill</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customer
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/newconnection">New Connection.</a></li>
                            <li><a class="dropdown-item" href="/checkserviceno">Edit Connection Detail.</a></li>
                            <li><a class="dropdown-item" href="/payment">Quick Payment.</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/feedbackform">Any Sugession</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <a class="nav-link " aria-current="page" href="/logout">Logout.</a>
                </form>
            </div>
        </div>
    </nav>
    <h1 class="had">Form for NewConnection.</h1>
    <span class="error">@error('name') {{ $message }} @enderror</span>
    <span class="error">@error('email') {{ $message }} @enderror</span>
    <form action="{{route('creates') }}" method="POST">


        @csrf

        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail')}}
        </div>
        @endif
        <div class="form">
            <table>
                @csrf
                <tr class="row">
                    <td>
                        <input type="text" name="name" placeholder="Enter user name" value="{{old('name')}}">
                        <input type="text" name="email" placeholder="Enter user Email" value="{{old('email')}}"><br><br>
                    </td>
                </tr>
                <tr class="row1">
                    <td>
                        <input type="text" name="phoneno" placeholder="Enter your PhoneNo" value="{{old('phoneno')}}" />
                        <input type="text" name="address" placeholder="Enter user Address" value="{{old('address')}}">
                        <span class="error0">@error('phoneno') {{ $message }} @enderror</span>
                        <span class="error0">@error('address') {{ $message }} @enderror</span><br><br>
                    </td>
                </tr>
                <tr class="row2">
                    <td>
                        <input type="text" name="pincode" placeholder="Enter your PinCode" value="{{old('pincode')}}" />
                        <input type="text" id="txtlist" placeholder="Enter your State" list="state" name="state" value="{{old('state')}}" />
                        <span class="error3">@error('pincode') {{ $message }} @enderror</span>
                        <span class="error3">@error('state') {{ $message }} @enderror</span>
                    </td>
                </tr>
                <tr class="row3">
                    <td>
                        <Datalist id="state">
                            <option value="Gujarat"></option>
                            <option value="Rajasthan"></option>
                            <option value="Hariyana"></option>
                            <option value="Maharastra"></option>
                        </Datalist><br>
                    </td>
                </tr>
                <tr class="row4">
                    <td>
                        <input type="text" value="{{$serviceno ?? ''}}" placeholder="Note your ServiceNo"></input>
                        <input type="text" name="city" placeholder="Enter your City" value="{{old('city')}}" />

                        <span class="error2">@error('city') {{ $message }} @enderror</span>
                        <br><br>
                    </td>
                </tr>
                @if(Session::get('success'))
                <script>
                    swal("Great Job!", "{{Session::get('success')}}", "success", {
                        button: "ok",
                    })
                </script>
                @endif
                <tr class="row5">
                    <td>
                        <button>Submit</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <marquee class="note">Note :- Plese note down your <b class="color">"Service Number !!"</b>in case of changing name of any detail or deleting any recprd ServiceNo in needed.</marquee>
</body>

</html>
