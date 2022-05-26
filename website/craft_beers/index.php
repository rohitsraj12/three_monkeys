<?php

    $page_title     = "Craft Beer Page";
    $nav_active     = "craft";

    $meta_key       = "";
    $meta_desc      = "";

    include("../private/config/config.php");
    include("../private/required/header.inc.php");

?>
        <div class="body__banner other__banner">
            <div class="banner__image">

                <div class="banner__image-desktop">
                    <img src="<?php echo base_url();?>assets/img/banner/about_us.jpg" alt="">
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
                                    Craft Beer
                                </h2>
                            </header>
                            
                            <div class="banner__body">
                                <ul>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Craft Beer</a></li>
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

                <section class="section__about">
                    <div class="wrap__container py-5">
                        <div class="row py-5 align-items-center g-4">

                            <div class="col-md-6">
                                <article>
                                    <header class="article__header pb-4">
                                        <p class="primary__header-sub sub__style">
                                            Three Moneys
                                        </p>
                                        <p class="primary__header">
                                            Craft Beer Name
                                        </p>
                                    </header>

                                    <div class="article__body">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe neque veritatis magni illo inventore sed ducimus, dicta fuga totam et doloribus fugit dignissimos alias deleniti incidunt perspiciatis eius? Laborum, hic. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, voluptates in. Amet dicta placeat quae laboriosam pariatur ratione dignissimos odio maiores voluptatem eius saepe quasi perspiciatis minus mollitia, dolorum assumenda facilis labore qui? Repudiandae dicta voluptatibus exercitationem perspiciatis rem praesentium.
                                        </p>
                                       
                                    </div>

                                </article>
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-5">
                                <figure>
                                    <img class="w-100" src="<?php echo base_url();?>assets/img/craft-beer/beer-1.jpg" alt="">
                                </figure>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="section__about">
                    <div class="wrap__container py-5">
                        <div class="row py-5 align-items-center g-4">

                            <div class="col-md-5">
                                <figure>
                                    <img class="w-100" src="<?php echo base_url();?>assets/img/craft-beer/beer-1.jpg" alt="">
                                </figure>
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-6">
                                <article>
                                    <header class="article__header pb-4">
                                        <p class="primary__header-sub sub__style">
                                            Three Moneys
                                        </p>
                                        <p class="primary__header">
                                            Craft Beer Name
                                        </p>
                                    </header>

                                    <div class="article__body">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe neque veritatis magni illo inventore sed ducimus, dicta fuga totam et doloribus fugit dignissimos alias deleniti incidunt perspiciatis eius? Laborum, hic. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, voluptates in. Amet dicta placeat quae laboriosam pariatur ratione dignissimos odio maiores voluptatem eius saepe quasi perspiciatis minus mollitia, dolorum assumenda facilis labore qui? Repudiandae dicta voluptatibus exercitationem perspiciatis rem praesentium.
                                        </p>
                                       
                                    </div>

                                </article>
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