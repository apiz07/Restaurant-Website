<?php

include 'connect.php'; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/favicon.jpeg" type="image/gif">
    <title>GM Enterprise</title>

    <!-- jquery -->
    <script src="js/jquery/jquery-3.4.0.min.js"></script>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- magnific css -->
    <link rel="stylesheet" href="magnific/magnific-popup.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/all.js"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
<!-- start of navbar -->

<nav class="navbar navbar-expand-lg fixed-top">
    <a href="#" class="navbar-brand text-uppercase secondaryclr">GM enterprise</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
        <div class="toggler-btn">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
        </div>
    </button>

    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a href="#special-items" class="nav-link text-capitalize">Menu</a>
            </li>
            <li class="nav-item">
                <a href="#menu" class="nav-link text-capitalize">Price</a>
            </li>
            <li class="nav-item">
                <a href="#about" class="nav-link text-capitalize">About</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link text-capitalize">Contact Us</a>
            </li>
            <li class="nav-item">
                <a href="orders.php" class="nav-link text-capitalize">Order</a>
            </li>
        </ul>
    </div>

</nav>

<!-- end of navbar -->
<!-- menu -->

<section class="py-5" id="special-items">
    <div class="container my-5">
        <div class="row parent-container">

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/ayamgunting.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/ayamgunting.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">Ayam Gunting</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/ayamcheese.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/ayamcheese.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">Ayam Gunting Cheese</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/popcorn.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/popcorn.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">Chicken Popcorn</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/popcornc.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/popcornc.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">Chicken Popcorn Cheese</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/jumsosej.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/jumsosej.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">Jumbo Sosej</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/corndogc.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/corndogc.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">Corndog Cheese</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/nasilemakagor.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/nasilemakagor.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">nasi lemak ayam goreng</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/nasilemakayamrend.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/nasilemakayamrend.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">nasi lemak ayam rendang</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/nasilemakikanmasin.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/nasilemakikanmasin.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">nasi lemak ikan masin</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/nasilemakkukus.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/nasilemakkukus.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">nasi lemak kukus</h1>
                    </a>
                </div>
            </div>

            <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                <div class="item-container">
                    <img src="image/buburpedas.jpeg" class="img-fluid img-thumbnail item-img" alt="">
                    <a href="image/buburpedas.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">Bubur pedas</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end of menu -->

<!-- price menu -->
<section id="menu" class="py-5 my5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- title -->
                <div class="row">
                    <div class="col">
                        <h1 class="primaryclr text-uppercase">Nasi</h1>
                    </div>
                </div>
                <!-- end of title -->
                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">nasi lemak ayam goreng*</h2>
                        <h4 class="text-muted">Rice cooked with coconut milk + Fried Chicken</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 5</h1>
                    </div>
                </div>

                <!-- end of item -->

                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3 special">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">nasi lemak ayam rendang*</h2>
                        <h4 class="text-muted">Rice cooked with coconut milk + Rendang Ayam</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 5</h1>
                    </div>
                    <h3 class="special-text text-capitalize">people's choice</h3>
                </div>

                <!-- end of item -->

                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">nasi lemak ikan masin*</h2>
                        <h4 class="text-muted">Rice cooked with coconut milk + Salted Fish</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 5</h1>
                    </div>
                </div>

                <!-- end of item -->

                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">nasi lemak kukus*</h2>
                        <h4 class="text-muted">Steamed Rice cooked with Coconut Milk</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 5</h1>
                    </div>
                </div>

                <!-- end of item -->

                <!-- title -->
                <div class="row">
                    <div class="col">
                        <h1 class="primaryclr text-uppercase">ayam</h1>
                    </div>
                </div>
                <!-- end of title -->
                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3 special">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">ayam gunting</h2>
                        <h4 class="text-muted">Spicy Chicken Chop/ Original Chicken Chop</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 10</h1>
                    </div>
                    <h3 class="special-text text-capitalize">people's choice</h3>
                </div>

                <!-- end of item -->


                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">chicken popcorn</h2>
                        <h4 class="text-muted">Spicy Chicken Popcorn/ Original Chicken Popcorn</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 5</h1>
                    </div>
                </div>

                <!-- end of item -->

            </div>
            <!-- end of first col -->

            <div class="col-md-6">
                 <!-- title -->
                 <div class="row">
                    <div class="col">
                        <h1 class="primaryclr text-uppercase">sosej</h1>
                    </div>
                </div>
                <!-- end of title -->
                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">jumbo sosej</h2>
                        <h4 class="text-muted">Big sausage with cheese inside</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 5</h1>
                    </div>
                </div>

                <!-- end of item -->

                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3 special">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">corndog cheese</h2>
                        <h4 class="text-muted">Sausage with mozarella cheese</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 8</h1>
                    </div>
                    <h3 class="special-text text-capitalize">people's choice</h3>
                </div>

                <!-- end of item -->

                <!-- title -->
                <div class="row">
                    <div class="col">
                        <h1 class="primaryclr text-uppercase">specials</h1>
                    </div>
                </div>
                <!-- end of title -->
                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">bubur pedas*</h2>
                        <h4 class="text-muted"></h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 5</h1>
                    </div>
                </div>

                <!-- end of item -->

                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3 special">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">ayam gunting cheese</h2>
                        <h4 class="text-muted">Chicken Chop with Cheese</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 12</h1>
                    </div>
                    <h3 class="special-text text-capitalize">people's choice</h3>
                </div>

                <!-- end of item -->

                <!-- item -->
                <div class="single-item d-flex justify-content-between my-3 p-3">
                    <div class="single-item-text">
                        <h2 class="text-uppercase text-dark">chicken popcorn cheese</h2>
                        <h4 class="text-muted">Chicken Popcorn with Cheese</h4>
                    </div>
                    <div class="single-item-price align-self-end">
                        <h1 class="text-uppercase text-dark">RM 7</h1>
                    </div>
                </div>

                <!-- end of item -->

            </div>
            <strong class="primaryclr text-uppercase"><h4>Notes : </h4><h5>* - <i>Order must be made one day before delivery</i></h5></strong>
        </div>
    </div>
</section>
<!-- end of price menu -->
<!-- about -->

<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-4">
                <h1 class="text-uppercase display-3">about us</h1>
                <h2 class="text-muted">More Ayam Gunting has been operated since 2016 where we start from selling in front our house. 
                    in 2016, we start by selling ice blended drinks before we start selling Nasi Lemak and by the end of 2016 we start selling ayam gunting by joining event in Miri like Miri Bike Week and during Bazaar Ramadhan. 
                    Starting 2017, we start selling in Bazaar Ramadhan every year until now and we focus on selling Ayam Gunting. While not in Ramadhan, every weekend we will open our business in our village which in Marudi, Sarawak. </h2>
            </div>
            <div class="col-md-6 about-pic my-4 d-none d-lg-block">
                <img src="image/ayamgunting.jpeg" alt="" class="img-1 img-thumbnail about-image">
                <img src="image/ayamcheese.jpeg" alt="" class="img-2 img-thumbnail about-image">
                <img src="image/popcorn.jpeg" alt="" class="img-3 img-thumbnail about-image">
                <img src="image/popcornc.jpeg" alt="" class="img-4 img-thumbnail about-image">
                <img src="image/jumsosej.jpeg" alt="" class="img-5 img-thumbnail about-image">
            </div>
        </div>
    </div>


</section>


<!-- end of about -->

<!-- contact -->
<section id="contact">
    <div class="container-fluid no-padding">
        <div class="row">
            <div class="col-md-6 my-3">
                <div class="embed-responsive embed-responsive-21by9 height-60">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.591869714606!2d114.01142591920343!3d4.4866504614083835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x321f51c6202cddfd%3A0x46d061bd85fc9936!2sJln%20Pulasan%2C%20Lutong%2C%2098000%2C%20Sarawak!5e0!3m2!1sen!2smy!4v1587278202412!5m2!1sen!2smy"
                    width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="col-md-6 my-3 align-self-center">
                    <div class="card text-center">
                        <div class="card-header">
                            <h1 class="text-uppercase">Contact Form</h1>
                        </div>
                        <div class="card-body">
                                <form action="https://formspree.io/xjvenbpk" method="POST" id="contact-form">
                                    <div class="input-group my-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Enter Your Name">
                                    </div>

                                    <div class="input-group my-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input-phone">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="phone" id="phone" class="form-control form-control-lg" placeholder="Enter Your Phone Number">
                                    </div>

                                    <div class="input-group my-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input-email">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter Your Email">
                                    </div>

                                    <div class="input-group my-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input-message">
                                                <i class="fas fa-inbox"></i>
                                            </span>
                                        </div>
                                        <textarea name="message" id="message" class="form-control form-control-lg"></textarea>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>Submit</button>
                                </form>
                        </div>
                    </div>
            </div>
        </div>
        
    </div>
</section>

<!--end of contact -->
<!-- footer -->

<div class="container-fluid info p-3">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
                <div class="info-icons p-2">
                    <img class="pic-icon" src="image/halal.png" alt="">
                    <img class="pic-icon" src="image/kempenmuslim.jpg" alt="">
		    <a href="login.php" class="p-1">Admin</a>
                </div>
                <h2 class="primaryclr p-2 text-uppercase">&copy; <?php echo date('Y'); ?> </h2>
            </div>
        </div>
</div>
<a href="#top-icons" id="back-to-top" class="p-1"><i class="fas fa-arrow-up primaryclr fa-3x"></i></a>

<!-- end of footer -->

    <!-- ripple js -->
    <script src="js/jquery/jquery.ripples-min.js"></script>

    <!-- magnific js -->
    <script src="magnific/jquery.magnific-popup.js"></script>

    <!-- javascript -->
    <script src="js/scrpt.js"></script>
</body>
</html>