<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/center_nav.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/gallery.css">
    
    <!-- script -->
</head>
<body>
    <div class="body__wrap">

        <div class="body__header body__header-absolute" data-aos="slide-down"
            data-aos-offset="100"
            data-aos-delay="50"
            data-aos-duration="1000"
            data-aos-easing="ease-in">

            <div class="hamberger">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <!-- end menu -->

            <div class="body__header-top">
                <div class="header__container-center">
                    <div class="row">
                        <div class="col-8">
                            <ul class="header__contact" data-aos="fade-in"
                                    data-aos-offset="100"
                                    data-aos-delay="500"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in">
                                <li class="header__contact-list"><i class="fa fa-location-arrow" aria-hidden="true"></i><a class="header__contact-link address" href="">Loading..</a></li>
                                <li class="header__contact-list"><i class="fa fa-phone" aria-hidden="true"></i><a class="header__contact-link tel" href="">Loading..</a></li>
                                <!-- <li class="header__contact-list"><a class="header__contact-link mailto" href="">Loading..</a></li> -->
                                <li class="header__contact-list"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="header__contact-link timing" href="">Loading..</span></li>
                            </ul>
                        </div>
                        <!-- end header contact -->
                        <div class="col-4">
                            <ul class="header__social" data-aos="fade-in"
                                    data-aos-offset="100"
                                    data-aos-delay="500"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in">
                                <!-- <li class="header__social-list"><a href="" class="header__social-link"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li> -->
                                <li class="header__social-list"><a href="https://www.instagram.com/3monkeysbrewpub/" target="_blank" class="header__social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="header__social-list"><a href="https://www.facebook.com/3MonkeysBrewPub" target="_blank" class="header__social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="header__social-list"><a href="https://www.youtube.com/channel/UCo_qzSCAN1sxOYixOfEt_qw" target="_blank" class="header__social-link"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                            <!-- end header social -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end body header top -->
            
            <div class="body__header-main">
                <!-- <header class="header__container">
                    <div class="header__brand py-1">
                        <a href="">
                            <img src="<?php echo base_url();?>assets/img/brand/logo.svg" alt="LOGO">
                        </a>
                    </div>

                    <nav class="header__nav">
                        <ul class="main__nav">
                            <li class="nav__list"><a href="<?php echo base_url();?>" class="nav__link">Home</a></li>
                            <li class="nav__list"><a href="<?php echo base_url();?>about/" class="nav__link">About</a></li>
                            <li class="nav__list"><a href="" class="nav__link">Menu</a></li>
                            <li class="nav__list"><a href="" class="nav__link">Gallery</a></li>
                            <li class="nav__list"><a href="" class="nav__link">Craft Beer</a></li>
                            <li class="nav__list"><a href="" class="nav__link">Contact Us</a></li>
                        </ul>
                    </nav>
                </header> -->
                
                <header class="header__container-center">
                    <div class="header__brand-sm py-1">
                        <a href="">
                            <img src="<?php echo base_url();?>assets/img/brand/logo.svg" alt="LOGO">
                        </a>
                    </div>

                    <nav class="header__nav">
                        <ul class="main__nav" data-aos="zoom-out"
                                    data-aos-offset="100"
                                    data-aos-delay="500"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in">
                            <li class="nav__list"><a href="<?php echo base_url();?>" class="nav__link <?php if($nav_active == "home"){ echo "active__nav" ; }?>">Home</a></li>
                            <li class="nav__list"><a href="<?php echo base_url();?>about/" class="nav__link <?php if($nav_active == "about"){ echo "active__nav" ; }?>">About</a></li>
                            <li class="nav__list"><a href="<?php echo base_url();?>craft_beers/" class="nav__link <?php if($nav_active == "craft"){ echo "active__nav" ; }?>">Craft Beer</a></li>
                        </ul>
                        <div class="header__brand">
                            
                            <div class="wrap__brand">
                                <a href="" data-aos="zoom-out"
                                    data-aos-offset="100"
                                    data-aos-delay="1000"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/brand/logo.svg" alt="LOGO">
                                </a>
                            </div>
                        </div>
                        <ul class="main__nav" data-aos="zoom-out"
                                    data-aos-offset="100"
                                    data-aos-delay="500"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in">
                            <li class="nav__list"><a href="<?php echo base_url();?>menu/" class="nav__link <?php if($nav_active == "menu"){ echo "active__nav" ; }?>">Menu</a></li>
                            <li class="nav__list"><a href="<?php echo base_url();?>gallery/" class="nav__link <?php if($nav_active == "gallery"){ echo "active__nav" ; }?>">Gallery</a></li>
                            <li class="nav__list"><a href="<?php echo base_url();?>contact_us/reservation.php" class="nav__link <?php if($nav_active == "reservation"){ echo "active__nav" ; }?>">Reservation</a></li>
                            <!-- <li class="nav__list"><a href="<?php echo base_url();?>contact_us/" class="nav__link">Contact Us</a></li> -->
                        </ul>

                        <div class="contact__sm mt-4 py-3">
                            <ul class="header__contact">
                                <li class="header__contact-lis"><i class="fa fa-location-arrow" aria-hidden="true"></i><a class="header__contact-link address" href="">Loading..</a></li>
                                <li class="header__contact-lis"><i class="fa fa-phone" aria-hidden="true"></i><a class="header__contact-link tel" href="">Loading..</a></li>
                                <li class="header__contact-lis"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="header__contact-link timing" href="">Loading..</span></li>
                            </ul>
                            <ul class="header__social">
                                <!-- <li class="header__social-list"><a href="" class="header__social-link"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li> -->
                                <li class="header__social-list"><a href="" class="header__social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="header__social-list"><a href="" class="header__social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="header__social-list"><a href="" class="header__social-link"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
            <!-- end body header main -->

        </div>
        <!-- end body header -->
