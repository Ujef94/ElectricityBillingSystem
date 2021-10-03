<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>EBS CompanyLtd.</title>
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
                        <a class="nav-link active" href="viewcheckserviceno">View Bill</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customer
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="newconnection">New Connection.</a></li>
                            <li><a class="dropdown-item" href="checkserviceno">Edit Connection Detail.</a></li>
                            <li><a class="dropdown-item" href="payment">Quick Payment.</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="feedbackform">Any Sugession</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <a class="nav-link " aria-current="page" href="logout">Logout.</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Welcome {{ $LoggedUserInfo->name }}!!</strong> Thanks for visiting my website.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="containermt mt-2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/i2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:white; font-size:30px">First slide label</h5>
                        <p style="color:white; ">Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/i1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style=" color:white; font-size:30px">Second slide label</h5>
                        <p style="color:white">representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/i4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:white; font-size:30px">Third slide label</h5>
                        <p style="color:white;">Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="leftimage">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src=/img/team-3.jpg>
            </div>
        </div>
    </div>

    <div class="two-box">
        <div class="row align-items-md-stretch mt-8">
            <div class="gray col-md-6">
                <div class="ge h-100 p-5  rounded-3">
                    <h2>Change the background</h2>
                    <p>Swap the background-color utility and add a `.text-*`Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis libero vel nostrum quisquam ut velit iste eligendi animi minus, alias, to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                    <button class="btn btn-outline-light" type="button">Example button</button>
                </div>
            </div>


            <div class="col-md-6">
                <div class="h-100 p-5  border   rounded-3">
                    <h2>Add borders</h2>
                    <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                    <button class="btn btn-outline-secondary" type="button">Example button</button>
                </div>
            </div>

        </div>
    </div>
    <div class="image">
        <div class="container mt-4">
            <h1>Our Employ</h1>
            <p>Our Valuable Hard Working Employes of the Year.</p>
            <div class="row">
                <div class="col-lg-4 text-center" style="box-shadow:0px 7px 10px 0px">
                    <img src=/img/testimonials-6.jpg>
                    <h2>Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. </p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 text-center" style="box-shadow:4px 7px 10px 0px">
                    <img src=/img/testimonials-4.jpg>
                    <h2>Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 text-center" style="box-shadow:3px 7px 10px 0px">
                    <img src=/img/team-3.jpg>
                    <h2>Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
    </div>
    <p></p>

    <div class="end">
        <p>For Contact.</p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. omnis corrupti doloribus facere dicta magnam!</span><br>
        <span>Amet corporis perspiciatis quam! Debitis eum nesciunt harum sit omnis ipsa. Quam eos alias ratione nihil expedita accusantium ab sequi?</span>
    </div><br>
    <div class="end-img">
        <p></p>
        <img class="one" src="/img/facebook2.png">
        <img class="two" src="/img/mail.png">
        <img class="three" src="/img/th.jpg">
        <img src="/img/R4e932f8433bc312f2ee7db7350d87753.png">
    </div>
    <br>
</body>

</html>
