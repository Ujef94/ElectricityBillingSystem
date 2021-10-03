<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/payment.css">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
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
                        <a class="nav-link active" aria-current="page" href="profile">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Business-Area">Business Areas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beyond Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="customer">Customer</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customer
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="newconnection">New Connection.</a></li>
                            <li><a class="dropdown-item" href="search">Edit Connection Info.</a></li>
                            <li><a class="dropdown-item" href="#">Delete Connection.</a></li>
                            <li><a class="dropdown-item" href="#">Quick Payment.</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="">Any Sugession</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="nav-link " aria-current="page" href="logout">Logout.</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="head">
        <h1>Form for <br>Quick Payment.</h1>
    </div>
    <div class="form">
        <table>
            @csrf
            <tr class="row">
                <td>
                    <input type="text" name="name" placeholder="Enter user name" value="{{old('name')}}">
                    <input type="text" name="text" placeholder="Enter user Serviceno" value="{{old('email')}}"><br><br>
                </td>
            </tr>
            <tr class="row1">
                <td>
                    <input type="date" name="date" placeholder="Enter the date" value="{{old('phoneno')}}" />
                    <input type="text" name="amount" placeholder="Enter user Amount" value="{{old('address')}}">
                    <br><br>
                </td>
            </tr>
            <tr class="row5">
                    <td>
                        <button>Submit</button>
                    </td>
                </tr>

        </table>
    </div>
</body>

</html>
