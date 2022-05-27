<?php

    $page_title     = "Gallery Page";
    $nav_active     = "gallery";

    $meta_key       = "";
    $meta_desc      = "";

    include("../private/config/config.php");
    include("../private/required/header.inc.php");

?>
        <div class="body__banner other__banner" data-aos="fade-in"
            data-aos-offset="100"
            data-aos-delay="0"
            data-aos-duration="400"
            data-aos-easing="ease-in">
            <div class="banner__image">

                <div class="banner__image-desktop">
                    <img src="<?php echo base_url();?>assets/img/banner/events.jpg" alt="">
                </div>
                <!-- end banner image desktop -->
                
                <div class="banner__image-mobile">
                    <img src="<?php echo base_url();?>assets/img/banner/home/banner-1-sm.jpg" alt="">
                </div>
                <!-- end banner image mobile -->

            </div>
            <!-- end banner image -->

            <div class="banner__content">
                <div class="banner__content-wrap">
                    <section class="wrap__container">
                        <article>
                            <header class="banner__header" data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                <h2>
                                    Gallery
                                </h2>
                            </header>
                            
                            <div class="banner__body" data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                <ul>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Gallery</a></li>
                                </ul>

                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
        <!-- end body banner -->

        <div class="body__container">
            <main>
                <section class="section__why py-5 border__t">
                    <div class="wrap__container py-5">
                        <header class="section__header text-center pb-5">
                            <p class="primary__header-sub sub__style-center" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="50"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                Three Monkeys
                            </p>
                            <p class="primary__header" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="50"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                Gallery
                            </p>
                        </header>

                        <div class="section__body">

                            <div class="gallery__grid gallery pb-2" >
                                <a class="box a fancybox" href="<?php echo base_url();?>assets/img/gallery/01.jpg" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="50"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/gallery/01.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                                <a class="box b fancybox" href="<?php echo base_url();?>assets/img/gallery/05.jpg" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="300"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/gallery/05.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                                <a class="box c fancybox" href="<?php echo base_url();?>assets/img/gallery/01.jpg" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="500"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/gallery/01.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                                <a class="box d fancybox" href="<?php echo base_url();?>assets/img/gallery/02.jpg" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="70"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/gallery/02.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                                <a class="box e fancybox" href="<?php echo base_url();?>assets/img/gallery/02.jpg" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="700"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/gallery/02.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                                <a class="box f fancybox" href="<?php echo base_url();?>assets/img/gallery/06.jpg" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="900"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/gallery/06.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                                <a class="box g fancybox" href="<?php echo base_url();?>assets/img/gallery/04.jpg" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="300"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/gallery/04.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                                <a class="box h fancybox" href="<?php echo base_url();?>assets/img/gallery/06.jpg" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="500"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/gallery/06.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                                <a class="box i fancybox" href="<?php echo base_url();?>assets/img/gallery/02.jpg" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="100"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                    <img src="<?php echo base_url();?>assets/img/gallery/02.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                                <a class="box j fancybox" href="<?php echo base_url();?>assets/img/gallery/06.jpg">
                                    <img src="<?php echo base_url();?>assets/img/gallery/06.jpg" alt="" />
                                    <header>
                                        <p>
                                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                        
                                        <h2 class="gallery__header">
                                            Event Name
                                        </h2>
                                    </header>
                                </a>
                            </div>

                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!-- end body container -->
        
<?php

    include("../private/required/footer.inc.php");

?>