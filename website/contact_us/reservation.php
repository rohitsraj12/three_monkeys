<?php


    $page_title     = "Reservation Page";
    $nav_active     = "reservation";

    $meta_key       = "";
    $meta_desc      = "";


    include("../private/config/config.php");
    include("../private/required/header.inc.php");

?>
        <div class="body__banner other__banner">
            <div class="banner__image">

                <div class="banner__image-desktop">
                    <img src="<?php echo base_url();?>assets/img/banner/contact.jpg" alt="">
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
                            <header class="banner__header">
                                <h2>
                                    Reservation
                                </h2>
                            </header>
                            
                            <div class="banner__body">
                                <ul>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li>Reservation</li>
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
                        
                        <div class="section__body">
                            <div class="row justify-content-center align-items-center g-4">
                                
                                <div class="col-md-12">
                                    <section class="contact__us-form px-4 py-5">
                                        <article>
                                            <header class="contact__us-form-header text-center pb-2 mb-4 border__b">
                                                <h2 class="article__header pb-3">
                                                    Reservation
                                                </h2>
                                                <div class="row text-center reservation__contact">
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="contact__us-bloc">
                                                            <p class="contact__us-block-header">
                                                                Email Address
                                                            </p>
                                                            <p class="conatct__us-block-data">
                                                                <a class="mailto"> Loading..</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="contact__us-bloc">
                                                            <p class="contact__us-block-header">
                                                                Phone Number
                                                            </p>
                                                            <p class="conatct__us-block-data">
                                                                <a class="tel"> Loading..</a>
                                                            </p>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="contact__us-bloc">
                                                            <p class="contact__us-block-header">
                                                            Our Working Hours
                                                            </p>
                                                            <p class="conatct__us-block-data">
                                                                <span class="timing"> Loading..</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                            <article class="article__body">
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">  
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Event Type</label>
                                                                <!-- <input type="text" id="exampleFormControlInput1" placeholder="Phone Number"> -->
                                                                <select name="" class="form-control" id="">
                                                                    <option class="text-light" value="">Select Event Type</option>
                                                                    <option class="text-light" value="">Corporate Events</option>
                                                                    <option class="text-light" value="">Birthday Event</option>
                                                                    <option class="text-light" value="">Large Group</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Event Date</label>
                                                                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">  
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Number Of Guest</label>
                                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Number of guests">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-4">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Any Special Requests</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Any Special Requests"></textarea>
                                                    </div>
                                                    <div class="">
                                                        <button class="btn__primary">
                                                            Send
                                                        </button>
                                                    </div>
                                                </form>
                                            </article>
                                        </article>
                                    </section>
                                </div>
                                <!-- <div class="col-md-4">
                                    <aside class="aside px-4">
                                        <section class="section__contact_us mb-3">
                                            <article class="contact">
                                                <header class="contact__header aside__header text-center py-3 border__b">
                                                    Contact Details
                                                </header>
                                                <div class="contact__body">
                                                    <div class="contact__us-block">
                                                        <p class="contact__us-block-header">
                                                            Address
                                                        </p>
                                                        <p class="conatct__us-block-data">
                                                            <address style="color: rgb(190, 190, 190)" class="address"> Loading..</address>
                                                        </p>
                                                    </div> 
                                                    <div class="contact__us-block">
                                                        <p class="contact__us-block-header">
                                                            Email Address
                                                        </p>
                                                        <p class="conatct__us-block-data">
                                                            <a class="mailto"> Loading..</a>
                                                        </p>
                                                    </div>
                                                    <div class="contact__us-block">
                                                        <p class="contact__us-block-header">
                                                            Phone Number
                                                        </p>
                                                        <p class="conatct__us-block-data">
                                                            <a class="tel"> Loading..</a>
                                                        </p>
                                                    </div>
                                                    <div class="contact__us-block">
                                                        <p class="contact__us-block-header">
                                                           Our Working Hours
                                                        </p>
                                                        <p class="conatct__us-block-data">
                                                            <span class="timing"> Loading..</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </article>
                                        </section>
                                        <section class="section__contact_us">
                                            <article class="contact">
                                                <header class="contact__header aside__header text-center py-3 border__b">
                                                    Follow Us
                                                </header>
                                                <div class="contact__body">
                                                    <ul class="contact-us__social text-center pb-3">
                                                        <li class="header__social-list"><a href="" class="header__social-link"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                                        <li class="header__social-list"><a href="" class="header__social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                        <li class="header__social-list"><a href="" class="header__social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                        <li class="header__social-list"><a href="" class="header__social-link"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </section>
                                    </aside>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7776.195879112832!2d77.5983203!3d12.9655844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15d7a5de4879%3A0x8006628bd5096119!2sGopalan%20Enterprises!5e0!3m2!1sen!2sin!4v1653383884230!5m2!1sen!2sin" class="map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </main>
        </div>
        <!-- end body container -->
        
<?php

    include("../private/required/footer.inc.php");

?>