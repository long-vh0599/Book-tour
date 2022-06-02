<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/view.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/home.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/cart.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/handbook.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/product.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/search.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/success.css">
</head>

<body>
    <header>
        <div id="header">
            <div class="container">
                <div class="row">
                    <!--	Logo	-->
                    <div id="logo" class="col-lg-3 col-md-3 col-sm-4">
                        <h1><a href="<?php echo BASE_URL ?>"><img class="img-fluid" src="<?php echo BASE_URL ?>/public/images/logo-2.png"></a></h1>
                    </div>
                    <!--	End Logo	-->

                    <!--    Cart        -->
                    <div id="cart" class="col-lg-1 col-md-1 col-sm-4">
                        <a class="cart-text" href="<?php echo BASE_URL ?>/CCart">Tour đã đặt</a><span class="cart-simp"><?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);}else{echo 0;}?></span>
                    </div>
                    <!--    End Cart     -->

                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <!--	Menu	-->
                        <nav>
                            <div id="menu">
                                <ul>
                                    <li class="menu-item"><a href="<?php echo BASE_URL ?>">Du lịch</a></li>
                                    <li class="menu-item"><a href="<?php echo BASE_URL ?>/CProduct/InLand">Trong nước</a></li>
                                    <li class="menu-item"><a href="<?php echo BASE_URL ?>/CProduct/OutLand">Ngoài nước</a></li>
                                    <li class="menu-item"><a href="<?php echo BASE_URL ?>/CPost/HandBook">Cẩm nang du lịch</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--	End Menu	-->
                </div>
            </div>
        </div>
    </header>
    