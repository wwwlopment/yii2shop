<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
    <!----//webfonts---->

    <!--  jquery plguin -->
    <!--start slider -->

    <!--end slider -->
</head>
<body>
<?php $this->beginBody() ?>


<!----start-container----->
<div class="header-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""/></a></div>
            </div>
            <div class="col-md-8">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header"><span class="text-left"><a href="#">MENU</a></span>
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <div class="btn-group show-on-hover">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown">
                                            Categories<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">New arrivals</a></li>
                                            <li><a href="#">Men</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Accessories</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="right">
                    <ul class="list-unstyled">
                        <li class="a text-left"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                            $2,534,5435
                        </li>
                        <li><a href="#">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!----start-images-slider---->
            <!-- Single button -->

        </div>
    </div>
</div>
<?= $content;?>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline pull-left">
                    <li><a href="#">Terms of Services</a></li>
                    <li><a href="#">Refunds</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <form class="navbar-form pull-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="Find" class="btn btn-default">Find</button>
                </form>
            </div>
        </div>
        <div class="copy-right text-center">
            <p>&#169Copyright 2014 All Rights Reserved Template <a href="http://w3layouts.com/"> w3layouts.com</a></p>

        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
