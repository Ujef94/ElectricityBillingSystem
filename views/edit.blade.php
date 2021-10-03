<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/edit.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Update Detail.</title>
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
                        <a class="nav-link active" aria-current="page" href="/adminprofile">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/Admin_Business-Area">Business Areas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beyond Business</a>
                    </li>
                    <li class"nav-item">
                        <a class="nav-link active" href="#">Generate Bill</a>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="/" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Request & Action
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/list">New Connection Request.</a></li>
                            <li><a class="dropdown-item" href="/editdetaillist">Edit Details Request.</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/feedbackform">Any Sugession</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <a class="nav-link " aria-current="page" href="/adminlogout">Logout.</a>
                </form>
            </div>
        </div>
    </nav>
    <h1 class="had"> Form for <br>Update Detail.</h1><br>
    <form action="{{Route('edit')}}" method="POST">
        @csrf
        <div class='result'>
            @if(Session::get('sucessful'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
            @endif
        </div>
        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail')}}
        </div>
        @endif
        <div class="form">
            <table>
                <input type="hidden" name="id" value="{{$data['id']}}">
                <tr class="row">
                    <td>
                        <input type="text" name="name" value="{{$data['name']}}">
                        <input type="text" name="email" value="{{$data['email']}}"><br><br>
                    </td>
                </tr>
                <tr class="row1">
                    <td>
                        <input type="text" name="phoneno" value="{{$data['phoneno']}}">
                        <input type="text" name="address" value="{{$data['address']}}"><br><br>
                    </td>
                </tr>
                <tr class="row2">
                    <td>
                        <input type="text" name="pincode" value="{{$data['pincode']}}">
                        <input type="text" name="state" value="{{$data['state']}}"><br><br>
                    </td>
                </tr>
                <tr class="row3">
                    <td>
                        <Datalist id="state">
                            <option value="Gujarat"></option>
                            <option value="Rajasthan"></option>
                            <option value="Hariyana"></option>
                            <option value="Maharastra"></option>
                        </Datalist>
                    </td>
                </tr>
                <tr class="row4">
                    <td>
                        <input type="text" name="city" value="{{$data['city']}}"><br><br>
                    </td>
                </tr>
                <tr class="row5">
                    <td>
                        <button type="submit">Update</button>
                    </td>
                </tr>
            </table>
    </form>

</body>
</html>
