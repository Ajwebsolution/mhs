<?php

get_header();



?>

<section class="page-header">
            <div class="page-header-shape-1"><img src="assets/images/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>leistungen</li>
                        <li><span>/</span></li>
                        <li>Sanitär
                        </li>
                    </ul>
                    <h2>Sanitär
                    </h2>
                </div>
            </div>
        </section>


        <!--Benefits Two Start-->
        <section class="benefits-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="benefits-two__left">
                            <div class="benefits-two__img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="benefits-two__right">
                            <div class="why-choose-two__left">
                                <p class="why-choose-two__text"><?php the_content(); ?></p>
                            </div>
                       
                            <a href="https://config.suissetec-web.ch/?customer=steinmann" class="thm-btn pricing__btn mt-2">Online Anfrage</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Benefits Two End-->
        <?php
get_footer();
?>