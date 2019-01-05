<?php $baseUrl = 'http://localhost/project/admin/'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="<?= $baseUrl;?>assets/mdb/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?= $baseUrl;?>assets/mdb/css/mdb.min.css" rel="stylesheet">
</head>

<body class="fixed-sn light-blue-skin">

<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png"
                                     class="img-fluid flex-center"></a>
                </div>
            </li>
            <!--/. Logo -->
            <!--Social-->
            <li>
                <ul class="social">
                    <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                    <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                    <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
                    <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                </ul>
            </li>
            <!--/Social-->
            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Submit
                            blog<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Submit listing</a>
                                </li>
                                <li><a href="#" class="waves-effect">Registration form</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-hand-pointer"></i>
                            Instruction<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">For bloggers</a>
                                </li>
                                <li><a href="#" class="waves-effect">For authors</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-eye"></i> About<i
                                    class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Introduction</a>
                                </li>
                                <li><a href="#" class="waves-effect">Monthly meetings</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-envelope"></i> Contact me<i
                                    class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">FAQ</a>
                                </li>
                                <li><a href="#" class="waves-effect">Write a message</a>
                                </li>
                                <li><a href="#" class="waves-effect">FAQ</a>
                                </li>
                                <li><a href="#" class="waves-effect">Write a message</a>
                                </li>
                                <li><a href="#" class="waves-effect">FAQ</a>
                                </li>
                                <li><a href="#" class="waves-effect">Write a message</a>
                                </li>
                                <li><a href="#" class="waves-effect">FAQ</a>
                                </li>
                                <li><a href="#" class="waves-effect">Write a message</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>Material Design for Bootstrap</p>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><i class="fas fa-user"></i> <span
                            class="clearfix d-none d-sm-inline-block">Account</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->

<!--Main Layout-->
<main>
    <!-- Section: Products v.1 -->
    <section class="text-center my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
        <!-- Section description -->
        <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
            nostrum quisquam eum porro a pariatur veniam.</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                             alt="sample photo">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="grey-text">
                            <h5>Denim</h5>
                        </a>
                        <h4 class="card-title">
                            <strong>
                                <a href="">Denim trousers</a>
                            </strong>
                        </h4>
                        <!--Rating-->
                        <ul class="rating">
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="far fa-star"></i>
                            </li>
                        </ul>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>49$</strong>
            </span>
                            <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fas fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                <i class="fas fa-heart ml-3"></i>
              </a>
            </span>
                        </div>
                    </div>
                    <!-- Card content -->
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                             alt="sample photo">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="grey-text">
                            <h5>Shoes</h5>
                        </a>
                        <h4 class="card-title">
                            <strong>
                                <a href="">High heels</a>
                            </strong>
                        </h4>
                        <!--Rating-->
                        <ul class="rating">
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>89$</strong>
            </span>
                            <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fas fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="fas fa-heart grey-text ml-3"></i>
              </a>
            </span>
                        </div>
                    </div>
                    <!-- Card content -->
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg" class="card-img-top"
                             alt="sample photo">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="grey-text">
                            <h5>Outwear</h5>
                        </a>
                        <h4 class="card-title">
                            <strong>
                                <a href="">Brown coat</a>
                            </strong>
                        </h4>
                        <!--Rating-->
                        <ul class="rating">
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star-half-alt"></i>
                            </li>
                        </ul>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>59$</strong>
            </span>
                            <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fas fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="fas fa-heart grey-text ml-3"></i>
              </a>
            </span>
                        </div>
                    </div>
                    <!-- Card content -->
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 col-md-6">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                             alt="sample photo">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="grey-text">
                            <h5>Blouses</h5>
                        </a>
                        <h4 class="card-title">
                            <strong>
                                <a href="">Shirt</a>
                            </strong>
                        </h4>
                        <!--Rating-->
                        <ul class="rating">
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="far fa-star"></i>
                            </li>
                        </ul>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>119$</strong>
            </span>
                            <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fas fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                <i class="fas fa-heart ml-3"></i>
              </a>
            </span>
                        </div>
                    </div>
                    <!-- Card content -->
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Products v.1 -->
</main>
<!--Main Layout-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?= $baseUrl;?>assets/mdb/js/jquery-3.2.1.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="<?= $baseUrl;?>assets/mdb/js/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= $baseUrl;?>assets/mdb/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= $baseUrl;?>assets/mdb/js/mdb.min.js"></script>
<script>

    // SideNav Initialization
    $(".button-collapse").sideNav();

</script>
</body>
</html>