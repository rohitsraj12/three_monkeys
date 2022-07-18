<?php


    $page_title     = "For Three monkeys pub Reservation @ Contact: 080 6690 9999";
    $nav_active     = "reservation";

    $meta_key       = "reservation, pub reservation, three monkeys pub reservation, pub reservation in bangalore";
    $meta_desc      = "For Three monkeys pub Reservation@ Contact: 080 6690 9999, Mail: Gm.3monkeys@Gmail.Com, Location: 4th Floor, Gopalan Signature Mall, Old Madras Road, BLR 560038";


    include("../private/config/config.php");
    include("../private/required/header.inc.php");

?>
        <div class="body__banner other__banner">
            <div class="banner__image" data-aos="fade-in"
            data-aos-offset="100"
            data-aos-delay="0"
            data-aos-duration="400"
            data-aos-easing="ease-in">

                <div class="banner__image-desktop">
                    <img src="<?php echo base_url();?>assets/img/banner/contact.jpg" alt="">
                </div>
                <!-- end banner image desktop -->
                
                <div class="banner__image-mobile">
                    <img src="<?php echo base_url();?>assets/img/banner/contact-sm.jpg" alt="">
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
                                    Reservation
                                </h2>
                            </header>
                            
                            <div class="banner__body" data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in">
                                <ul>
                                    <li><a href="<?php echo base_url();?>">Home</a></li>
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
                                                <h2 class="article__header pb-3" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="50"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                                    Reservation
                                                </h2>
                                                <div class="row text-center reservation__contact">
                                                    <div class="col-sm-6 col-md-4" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="50"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
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
                                                        <div class="contact__us-bloc" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="50"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
                                                            <p class="contact__us-block-header">
                                                                Phone Number
                                                            </p>
                                                            <p class="conatct__us-block-data">
                                                                <a class="tel"> Loading..</a>
                                                            </p>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="contact__us-bloc" data-aos="zoom-in"
                                                    data-aos-offset="100"
                                                    data-aos-delay="50"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in">
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
                                            <article class="article__body" data-aos="zoom-in"
                                                data-aos-offset="100"
                                                data-aos-delay="50"
                                                data-aos-duration="1000"
                                                data-aos-easing="ease-in">
                                                <form action="form.php" method="POST">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                                                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                                                <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">  
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                                                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Event Type</label>
                                                                <!-- <input type="text" id="exampleFormControlInput1" placeholder="Phone Number"> -->
                                                                <select name="" class="form-control" id="" name="event">
                                                                    <option class="text-light" value="">Select Event Type</option>
                                                                    <option class="text-light" value="Corporate Event">Corporate Event</option>
                                                                    <option class="text-light" value="Birthday Event">Birthday Event</option>
                                                                    <option class="text-light" value="Large Group">Large Group</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Event Date</label>
                                                                <input name="date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">  
                                                            <div class="mb-4">
                                                                <label for="exampleFormControlInput1" class="form-label">Number Of Guest</label>
                                                                <input name="guest" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Number of guests">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-4">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Any Special Requests</label>
                                                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Any Special Requests"></textarea>
                                                    </div>
                                                    <div class="">
                                                    <button name="submit" type="submit" class="btn__primary" value="reservation">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.8361009100693!2d77.6611738!3d12.992805599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1188a4860b47%3A0xd58191ebbe1509e4!2sGopalan%20Signature%20Mall!5e0!3m2!1sen!2sin!4v1654238391050!5m2!1sen!2sin" width="600"  class="map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </section>
            </main>
        </div>
        <!-- end body container -->
        
<?php

    include("../private/required/footer.inc.php");

?>