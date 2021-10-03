<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/editrequest.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-321x321.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Edit Detail Requests.</title>
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
    <p>
    <h2>Edit Detail Requests.</h2>
    <div class="table-responsive">
        <table class="table table-sm table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Customer_Id</th>
                    <th>Service_No</th>
                    <th>Name</th>
                    <th>NewDetail</th>
                    <th>Reason</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                </tr>
            </thead>
            @foreach ($edits as $item)
            <tbody>
                <td>{{$item['id']}}</td>
                <td>{{$item['customer_id']}}</td>
                <td>{{$item['serviceno']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['newdetail']}}</td>
                <td>{{$item['reason']}}</td>
                <td>{{$item['created_at']}}</td>
                <td>{{$item['updated_at']}}</td>
            </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>
