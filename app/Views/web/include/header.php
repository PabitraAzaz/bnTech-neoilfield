<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Neoilfield</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>fontawesome/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>css/dripicons.css">
    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>css/slick.css">
    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>css/meanmenu.css">
    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>css/default.css">
    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('public/assets/') ?>css/responsive.css">
</head>

<body>
    <!-- header -->
    <header class="header-area header-three">
        <div class="header-top second-header d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8 d-none d-lg-block">
                        <div class="header-cta">
                            <ul>
                                <li>
                                    <i class="icon fal fa-envelope"></i>
                                    <a href="mailto:info@neoilfield.co.in">
                                        <span>info@neoilfield.co.in</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="icon fal fa-phone"></i>
                                    <a href="tel:8617756910">
                                        <span>+91-8617756910</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 d-none d-lg-block text-right">
                        <div class="header-social">
                            <span>
                                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" title="LinkedIn"><i class="fab fa-instagram"></i></a>
                                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="Twitter"><i class="fab fa-youtube"></i></a>
                            </span>
                            <!--  /social media icon redux -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="<?= base_url() ?>"><img src="<?= base_url('public/assets/') ?>img/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">

                            <div class="main-menu text-center text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>

                                        <li>
                                            <a href="<?= base_url() ?>">Home</a>
                                        </li>

                                        <li class="has-sub">
                                            <a href="<?= base_url('services') ?>">Services</a>

                                            <ul>


                                                <?php foreach ($service_menu_data as $service): ?>
                                                    <li><a href="<?= base_url('services/' . $service['id']) ?>"><?= esc($service['title']) ?></a></li>
                                                <?php endforeach; ?>



                                                <!-- <li><a href="#">Service</a></li>
                                                <li><a href="#">Service</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="#">Products</a>
                                            <ul>
                                                <li><a href="#">Product</a></li>
                                                <li><a href="#">Product</a></li>
                                                <li><a href="#">Product</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url('gallery') ?>">Gallery</a></li>
                                        <li><a href="<?= base_url('about-us') ?>">About Us</a></li>
                                        <li><a href="<?= base_url('contact-us') ?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 text-right d-none d-lg-block mt-25 mb-25 text-right text-xl-right">
                            <div class="login">
                                <ul>
                                    <li>
                                        <div class="header-btn second-header-btn">
                                            <a href="#" class="btn">Get Started</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->














    <!-- main-area -->
    <main>
        <!-- search-popup -->
        <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content search-popup">
                    <div class="text-center">
                        <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                    </div>
                    <div class="row search-outer">
                        <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                        <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /search-popup -->