<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/bootstrap-utilities.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/slick.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/slick-theme.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/responsive.css" rel="stylesheet">
    <?php wp_head();?>
</head>

<body>
  <?php
      $theme_url = get_template_directory_uri();
    ?>
    <header class="header sticky-top">
        <div class="header__top-section">
            <div class="container header__inner">
                <div class="row gx-0 header__topbar align-items-center">
                    <div class="col d-none d-lg-flex align-items-center gap-2 header__contact">
                        <span class="header__icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </span>
                        <span class="header__text">
                            1234565487
                        </span>
                    </div>
                    <div class="col-12 col-lg-4 header__promobar bg-danger text-white">
                        <p class="text-uppercase m-0 header__para"> FREE DELIVERY ON ALL BOARDS WITH CODE:
                            FREEFEB | ONLY
                            72 HOURS LEFT</p>
                    </div>
                    <div class="col-12 col-lg-4 header__join text-center">
                        <a href="#" class="col-6 col-lg-12 d-flex gap-2
                             justify-content-center align-items-center
                             rounded-0 btn btn-blue text-white header__join-btn">
                            <span class="header__icon">
                                <img class="header__image-join"
                                src="<?php echo $theme_url; ?>/assests/img/mouse.svg"
                                 alt="join-icon">
                            </span>
                            <span class="header__text text-uppercase">
                                Ultra Trade - Join Now
                            </span>
                        </a>
                        <a href="#" class="col-6 d-flex d-lg-none gap-2
                             justify-content-center align-items-center
                             rounded-0 btn btn-success text-white header__join-btn">
                            <span class="header__text text-uppercase  ">
                                Order sample
                            </span>
                        </a>
                    </div>
                    <div class="col d-none d-lg-block header__cart-section">
                        <div class="d-flex align-items-center gap-3 justify-content-end">
                            <a class="js-search" href="#">
                                 <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#" class="header__profile-icon">
                                <i class="fa-regular fa-user"></i>
                            </a>
                            <a href="#" class="position-relative header__basket-icon">
                                <i class="fa-solid fa-basket-shopping"></i>
                                <span
                                    class="d-inline-flex position-absolute bg-primary
                                     text-white align-item-center header__basket-total">1</span>
                            </a>
                            <span class="header__basket-value fw-normal">£22.49</span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="header__navigation  bg-primary">
            <div class="container">
                <nav class="navbar navbar-expand-lg header__navbar">
                    <a class="navbar-brand header__logo" href="#">
                        <img src="<?php echo $theme_url;?>/assests/img/logo.svg"
                            alt="logo" class="header__logo-img" >
                    </a>
                    <div class="d-flex d-lg-none justify-content-end
                     align-items-center gap-3 text-white header__mobile-cart">
                        <a href="#">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#" class="header__profile-icon">
                            <i class="fa-regular fa-user"></i>
                        </a>
                        <a href="#" class="position-relative header__basket-icon">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <span  class="d-inline-flex position-absolute
                                  bg-white text-black header__basket-total">1</span>
                        </a>
                        <span class="header__basket-value fw-normal">£22.49</span>
                        <button class="navbar-toggler d-lg-none" type="button">
                            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-lg-end header__nav-main" id="navbarScroll">
                        <a class="d-lg-none d-block p-5 navbar-brand bg-primary header__moblie-logo" href="#">
                            <img src="https://ultradecking.co.uk/wp-content/themes/ultra-decking/assets/img/Logo-1.webp"
                                alt="logo" class="header__logo-menu"></a>
                        <ul class="navbar-nav header__lists">
                            <li class="nav-item header_navlist dropdown">
                                <a class="nav-link dropdown-toggle header__nav-link header__nav-link--active"
                                    aria-current="page" href="/shop">SHOP
                                    <span class="header__nav-arrow">
                                        <i class="fa-solid fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a href="#" class="header__dropdown-item">Decking</a></li>
                                    <li><a href="#" class="header__dropdown-item">Cladding</a></li>
                                    <li><a href="#" class="header__dropdown-item">Fencing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="<?php site_url();?>/product">SHOP TIMBER</a>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="#">ACCESSORIES</a>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="#">BE INSPIRED</a>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="<?php site_url();?>/guide">GUIDE</a>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="<?php site_url();?>/contact">CONTACT</a>
                            </li>
                            <li class="nav-item header_navlist d-none d-lg-block header_navlist--btn">
                                <a class="nav-link header__nav-link btn btn-outline-light
                                 header_navlink--btn" href="#">Free
                                    Sample</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Content sections -->
    <main class="page-body">
