<?php

    $page_title     = "Home Page";
    $nav_active     = "home";

    $meta_key       = "";
    $meta_desc      = "";

    include("private/config/config.php");
    include("private/required/header.inc.php");

?>
        <div class="body__banner home__banner" data-aos="fade-in"
            data-aos-offset="100"
            data-aos-delay="0"
            data-aos-duration="400"
            data-aos-easing="ease-in">
            <div class="banner__image">

                <div class="banner__image-desktop">
                    <img src="<?php echo base_url();?>assets/img/banner/home/banner-1-lg.jpg" alt="">
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
                    <section>
                        <article>
                            <!-- <header class="banner__header">
                                <h2>
                                    Welcome to 
                                </h2>
                                <h2></h2>
                            </header> -->
                            <figure>
                                <!-- <img src="assets/img/brand/logo_banner.svg" alt=""> -->
                            </figure>
                            <!-- <div class="banner__body">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic pariatur quibusdam similique quisquam minima eveniet libero, sit dolore id perferendis?
                                </p>
                            </div> -->
                        </article>
                    </section>
                </div>
            </div>
        </div>
        <!-- end body banner -->

        <div class="body__container">
            <main>

            <section class="section__about-us bg__dark py-5">
                <div class="container  my-5">

                    <div class="section__body">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <section class="py-5">
                                    <article>
                                        
                                        <header class="section__header py-3">
                                            <p class="primary__header-sub sub__style" data-aos="zoom-in"
                                                data-aos-offset="100"
                                                data-aos-delay="50"
                                                data-aos-duration="1000"
                                                data-aos-easing="ease-in">
                                                Our
                                            </p>
                                            <p class="primary__header" data-aos="zoom-in"
                                                data-aos-offset="100"
                                                data-aos-delay="50"
                                                data-aos-duration="1000"
                                                data-aos-easing="ease-in">
                                                About Us
                                            </p>
                                        </header>

                                        <div class="section__body pb-3">
                                            <div class="row gx-5" data-aos="fade-in"
                                                data-aos-offset="100"
                                                data-aos-delay="50"
                                                data-aos-duration="1000"
                                                data-aos-easing="ease-in">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio vel dicta, ducimus, iste ipsa debitis laboriosam fuga exercitationem impedit magnam animi voluptates quos deserunt doloribus sint fugiat dolore vero non quas enim pariatur? Itaque recusandae impedit voluptas saepe obcaecati officiis!
                                                </p>
                                            </div>
                                        </div>

                                        <footer class="section__footer text-center" > 
                                            <a href="<?php echo base_url();?>menu/" class="btn__primary"data-aos="zoom-out"
                                            data-aos-offset="100"
                                            data-aos-delay="50"
                                            data-aos-duration="1000"
                                            data-aos-easing="ease-in">
                                                View More
                                            </a>
                                        </footer>
                                    </article>
                                </section>
                            </div>
                            <div class="col-md-6 px-0">
                                <section>
                                    <article  data-aos="fade-in"
                                    data-aos-offset="100"
                                    data-aos-delay="50"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in">
                                        <figure class="m-0">
                                            <img class="w-100" src="<?php echo base_url();?>assets/img/about/about-bg.jpg" alt="">
                                        </figure>
                                    </article>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

                <section class="section__craft-beer py-5">
                    <div class="wrap__container py-5">
                        <header class="section__header text-center pb-5" data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                            <p class="primary__header-sub sub__style-center">
                                three Monkey's
                            </p>
                            <p class="primary__header">
                                Craft Beer
                            </p>
                        </header>

                        <div class="section__body text-center pb-5">
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <section data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                        <article class="craft__beet-article">
                                            <figure>
                                                <img src="<?php echo base_url();?>assets/img/craft-beer/01.png" alt="">
                                            </figure>
                                            <header class="">
                                                <h1 class="craft__beer-header">
                                                    Lorem, ipsum dolor.
                                                </h1>
                                            </header>
                                            
                                        </article>
                                    </section>
                                </div>
                                <div class="col-md-3">
                                    <section data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                        <article class="craft__beet-article">
                                            <figure>
                                                <img src="<?php echo base_url();?>assets/img/craft-beer/02.png" alt="">
                                            </figure>
                                            <header class="">
                                                <h1 class="craft__beer-header">
                                                    Lorem, ipsum dolor.
                                                </h1>
                                            </header>
                                            
                                        </article>
                                    </section>
                                </div>
                                <div class="col-md-3">
                                    <section data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                        <article class="craft__beet-article">
                                            <figure>
                                                <img src="<?php echo base_url();?>assets/img/craft-beer/03.png" alt="">
                                            </figure>
                                            <header>
                                                <h1 class="craft__beer-header">
                                                    Lorem, ipsum dolor.
                                                </h1>
                                            </header>
                                            
                                        </article>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <footer class="section__footer text-center">
                            <a href="<?php echo base_url();?>craft_beers/" class="btn__primary" data-aos="slide-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                Read More
                            </a>
                        </footer>
                    </div>
                </section>

                <!-- <section class="section__about">
                    <div class="wrap__container py-5">
                        <div class="row py-5 align-items-center g-4">

                            <div class="col-md-6">
                                <article>
                                    <header class="article__header pb-4">
                                        <p class="primary__header-sub sub__style">
                                            About Us
                                        </p>
                                        <p class="primary__header">
                                            Three Monkeys
                                        </p>
                                    </header>

                                    <div class="article__body">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe neque veritatis magni illo inventore sed ducimus, dicta fuga totam et doloribus fugit dignissimos alias deleniti incidunt perspiciatis eius? Laborum, hic.
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dolore quasi at voluptatem blanditiis tenetur quibusdam laudantium, illo autem sit?
                                        </p>
                                        <ul>
                                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </li>
                                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur hic natus iusto! </li>
                                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing. </li>
                                        </ul>
                                    </div>

                                </article>
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-5">
                                <figure>
                                    <img class="w-100" src="<?php echo base_url();?>assets/img/bg/about-bg.jpg" alt="">
                                </figure>
                            </div>

                        </div>
                    </div>
                </section> -->

                <section class="section__why border__x">
                    <div class="container-fluid">

                        <div class="section__body">
                            <div class="row align-items-center">
                                <div class="col-md-4 px-0">
                                    <section>
                                        <article  data-aos="fade-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                            <figure class="m-0">
                                                <img class="w-100" src="<?php echo base_url();?>assets/img/menu/menu-1.jpg" alt="">
                                            </figure>
                                        </article>
                                    </section>
                                </div>
                                <div class="col-md-8">
                                    <section class="py-5">
                                        <article>
                                            
                                            <header class="section__header text-center pb-5">
                                                <p class="primary__header-sub sub__style-center" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="50"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                                    Our
                                                </p>
                                                <p class="primary__header" data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                                    Menu
                                                </p>
                                            </header>

                                            <div class="section__body px-4">
                                                <div class="row gx-5">
                                                    <div class="col-md-6">

                                                        <div class="menu__block" data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        GREEK SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            250.00
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        200/300g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="menu__block"  data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        GREEK SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            250.00
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        200/300g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="menu__block"  data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        GREEK SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            250.00
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        200/300g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="menu__block"  data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        GREEK SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            250.00
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        200/300g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="menu__block"  data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        GREEK SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            250.00
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        200/300g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="menu__block"  data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        CAESAR SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            280
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with romaine, olive oil, crushed garlic, Dijon mustard, lemon juice, Parmesan cheese and croutons.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        350/400g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="menu__block"  data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        GREEK SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            250.00
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        200/300g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="menu__block"  data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        GREEK SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            250.00
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        200/300g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>

                                                    </div>

                                                    <!-- <div class="col-md-6">
                                                        <div class="menu__block"  data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        GREEK SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            250.00
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        200/300g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="menu__block"  data-aos="fade-in"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in">
                                                            <article>
                                                                <header class="menu__header d-flex justify-content-between">
                                                                    <h2 class="dish__name">
                                                                        GREEK SALAD
                                                                    </h2>
                                                                    
                                                                    <div class="dish__price">
                                                                        <span></span>
                                                                        <span>
                                                                            250.00
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="menu__body d-flex justify-content-between">
                                                                    <div class="dish__detail">
                                                                        <p>
                                                                            Is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese and dressed with olive oil.
                                                                        </p>
                                                                    </div>
                                                                    <div class="dish__weight">
                                                                        200/300g
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>

                                                    </div> -->
                                                </div>
                                            </div>

                                            <footer class="section__footer text-center" > 
                                                <a href="<?php echo base_url();?>menu/" class="btn__primary"data-aos="zoom-out"
                                                data-aos-offset="100"
                                                data-aos-delay="50"
                                                data-aos-duration="1000"
                                                data-aos-easing="ease-in">
                                                    View More
                                                </a>
                                            </footer>
                                        </article>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section__tagline py-5 text-center backgroud__img-1 border__b">
                    <div class="container py-3">
                        <section>
                            <article>
                                
                                <header class="pb-4">
                                    <h3 class="tagline__header"  data-aos="zoom-out"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis architecto tenetur neque dolorum temporibus ratione dignissimos ab libero amet iste.
                                    </h3>
                                </header>

                                <footer class="section__footer text-center"  data-aos="zoom-out"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                    <a href="<?php echo base_url();?>contact_us/reservation.php" class="btn__primary">
                                        Book Reservation
                                    </a>
                                </footer>
                            </article>
                        </section>
                    </div>
                </section>

                <section class="section__testimonial ">
                    <div class="container">
                        <header class="section__header text-center pb-5" data-aos="zoom-out"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                            <p class="primary__header-sub sub__style-center">
                                Testimonials
                            </p>
                            <p class="primary__header">
                                Visitors Experience
                            </p>
                        </header>
                        <div class="section__body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <figure class="testimonial__img"  data-aos="fade-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                        <!-- <img src="<?php echo base_url();?>assets/img/testimonials/001.jpg" alt=""> -->
                                    </figure>
                                </div>
                                <div class="col-9">
                                    <div class="blockquote pt-5 px-5 pb-3" data-aos="fade-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                        <blockquote>
                                            <p>
                                                Below, you'll find a list of errors which are thrown by JavaScript. These errors can be a helpful debugging aid, but the reported problem isn't always immediately clear. 
                                            </p>
                                            <cite>
                                                <h2 class="client__name text-end">
                                                    Ashly Lobo
                                                </h2>
                                                <h6 class="client__profile text-end">
                                                    ABC, Director                                                
                                                </h6>
                                            </cite>
                                        </blockquote>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!-- end body container -->
        
<?php

    include("private/required/footer.inc.php");

?>