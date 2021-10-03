<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Bill.</title>
    <link rel="stylesheet" href="/css/billnewdetail.css">
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
                        <a class="nav-link active" aria-current="page" href="/adminprofile">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/Admin_Business-Area">Business Areas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beyond Business</a>
                    </li>
                    <li class"nav-item">
                        <a class="nav-link active" href="/billcheckserviceno">Generate Bill</a>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Request & Action
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/list">New Connection Request.</a></li>
                            <li><a class="dropdown-item" href="/editdetaillist">Edit Details Request.</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/feedbacklist">View Sugession.</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <a class="nav-link " aria-current="page" href="/adminlogout">Logout.</a>
                </form>
            </div>
        </div>
    </nav>
    <h1 class="cname">EBS CompanyLTD.</h1>
    <h4 class="had">Form for Generate Bills.</h4>
    <span class="error">@error('name') {{ $message }} @enderror</span>
    <span class="error">@error('serviceno') {{ $message }} @enderror</span>
    <form action="{{route('createsss') }}" method="POST">
        @csrf
        @if(Session::get('success'))
        <script>
            swal("Successful!", "{{Session::get('success')}}", "success", {
                button: "ok",
            })
        </script>
        @endif
        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail')}}
        </div>
        @endif
        <div class="form">
            <table>
                @csrf
                <tr class="row">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <td>
                        <b>Customer Name: </b><input type="text" name="name" placeholder="Enter user Name" value="{{$user->name}}"></input> &nbsp <b style="text-align: right;margin-left: 700px;">Enter Bill Date: </b><input type="date" name="date" placeholder="Enter user Name" value="{{$user->name}}"></input><br>
                        <b>Service Number: </b><input type="text" name="serviceno" value="{{$user->serviceno}}" placeholder="Enter your ServiceNo"></input>
                    </td>
                </tr>

                <tr class="row1">
                    <td>
                        <b>Phone Number: </b> <input type="phoneno" name="phoneno" placeholder="Enter user Phoneno" value="{{$user->phoneno}}"><br>
                        <b>Address: </b><input type="text" name="address" value="{{$user->address}}" placeholder="Enter your Address"></input>
                    </td>
                </tr>

                <tr class="row2">
                    <td>
                        <b>Email: </b><input type="text" name="email" placeholder="Enter user Email" value="{{$user->email}}"><br>
                        <b>Pincode: </b> <input type="pincode" name="pincode" value="{{$user->pincode}}" placeholder="Enter your pincode"></input>
                    </td>
                </tr>

                <tr class="row3">
                    <td>
                        <b>State: </b><input type="state" name="state" placeholder="Enter user state" value="{{$user->state}}"><br>
                        <b>City: </b><input type="city" name="city" value="{{$user->city}}" placeholder="Enter your city"></input>
                        <p><br>
                        <P><br>
                        <P>
                    </td>
                </tr>


            </table>

            <div id="pricing" class="container-fluid">


                <!-- container -->
                <div id="pricing" class="container">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Type & Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Category</td>
                                <td>Residential</td>
                            </tr>
                            <tr>
                                <td>Sanctional Load</td>
                                <td>6.000 KW</td>
                            </tr>
                            <tr>
                                <td>Supply Type</td>
                                <td>1-PH</td>
                            </tr>
                            <tr>
                                <td>Reading Date</td>
                                <td><input type="date" name="readingdate" placeholder="Enter Reding Date">
                                </td>
                            </tr>
                            <tr>
                                <td>Reading</td>
                                <td class="row4"><input type="number" name="unit" placeholder="Enter Meter Reading"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <tr class="row7">
            <td>
                <br>
                <div class="amount">
                    <span>Amount :</span><input type="amount" name="amount" placeholder="Enter Amount">
                </div>

            </td>
        </tr>


    </form>

    <h3 class="condition">Terms & Conditions</h3>
    <ul class="demo">
        <li>
            <h5>The above will be delivered upon payment via cash, check, or deposit.</h5>
        </li>
        <li>
            <h5>The invoice is valid for 1 month.</h5>
        </li>
        <li>
            <h5>One unit is equal to five unit.</h5>
        </li>
    </ul>

    <div class="row5">
        <td>
            <button>Submit</button>
        </td>
    </div>

<P>

</body>

</html>
