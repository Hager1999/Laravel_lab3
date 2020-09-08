<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- main css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- font awesome -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <title>Cart Project</title>
    <style>
    </style>
</head>

<body>
<!-- header -->
<header>
    <!-- navbar  -->
    <!--
https://www.iconfinder.com/icons/2427887/dessert_donut_doughnut_fat_sweets_icon
Creative Commons (Attribution 3.0 Unported);
https://www.iconfinder.com/korawan_m
     -->
    <nav class="navbar navbar-expand-lg px-4">

        <a class="navbar-brand" href="#"> <img  style="width: 90px; height: 90px;" src="{{asset('img/logo.svg/')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="myNav">
            <ul class="navbar-nav mx-auto text-capitalize">
                <li class="nav-item active">
                    <a class="nav-link" href="/">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/store">store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
            </ul>
            <div class="nav-info-items d-none d-lg-flex ">
                <!-- single info -->
                <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
                    <span class="info-icon mx-lg-3"><i class="fas fa-phone"></i></span>
                    <p class="mb-0">+ 123 456 789</p>
                </div>
                <!-- end of single info -->
                <!-- single info -->
                <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                    <span class="cart-info__icon mr-lg-3"><i class="fas fa-shopping-cart"></i></span>
                    <p class="mb-0 text-capitalize"><span id="item-count">2 </span> items - $<span class="item-total">10.49</span></p>
                </div>
                <!-- end of single info -->
            </div>
        </div>
    </nav>
    <!-- end of nav -->
    <!-- banner  -->
    <div class="container-fluid">
        <div class="row max-height justify-content-center align-items-center">
            <div class="col-10 mx-auto banner text-center">
                <h1 class="text-capitalize">welcome to <strong class="banner-title ">grandma's</strong></h1>
                <a href="/store" class="btn banner-link text-uppercase my-2">explore</a>

            </div>
            <div id="cart" class="cart">
                <!-- cart item -->
                <div class="cart-item d-flex justify-content-between text-capitalize my-3">
                    <img src="img-cart/cake-2.jpeg" class="img-fluid rounded-circle" id="item-img" alt="">
                    <div class="item-text">

                        <p id="cart-item-title" class="font-weight-bold mb-0">cart item</p>
                        <span>$</span>
                        <span id="cart-item-price" class="cart-item-price" class="mb-0">10.99</span>
                    </div>
                    <a href="#" id='cart-item-remove' class="cart-item-remove">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!--end of  cart item -->
                <!-- cart item -->
                <div class="cart-item d-flex justify-content-between text-capitalize my-3">
                    <img src="img-cart/doughnut-2.jpeg" class="img-fluid rounded-circle" id="item-img" alt="">
                    <div class="cart-item-text">

                        <p id="cart-item-title" class="font-weight-bold mb-0">cart item</p>
                        <span>$</span>
                        <span id="cart-item-price" class="cart-item-price" class="mb-0">10.99</span>
                    </div>
                    <a href="#" id='cart-item-remove' class="cart-item-remove">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!--end of  cart item -->
                <!-- cart total -->
                <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
                    <h5>total</h5>
                    <h5> $ <strong id="cart-total" class="font-weight-bold">10.00</strong> </h5>
                </div>
                <!--end cart total -->
                <!-- cart buttons -->
                <div class="cart-buttons-container mt-3 d-flex justify-content-between">
                    <a href="#" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">clear cart</a>
                    <a href="#" class="btn btn-outline-secondary text-uppercase btn-pink">checkout</a>
                </div>
                <!--end of  cart buttons -->
                <!--  -->
            </div>
        </div>
    </div>
    <!--end of  banner  -->
</header>
<!-- header -->
<!-- about --><!-- store --><!-- contact --><!-- getyourcake --><!-- cakenotfound -->
<div class="container">
    @yield('main')
</div>

</div>
</body>

</html>
