<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="/css/customer.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
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
            <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
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
    <table>
        <tr>
            <td>
                <a href="newconnection">
                    <img class="newconnection" src="/img/addcustomer.png">
                </a>
                <a href="list">
                    <img class = "delete_record"src="/img/deleterecord.jpg">
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <span class = "link">New Connection.</span>
                <span class = "delete">Delete Connection Info.</span>
            </td>
        </tr>
    </table>



</body>
</html>
