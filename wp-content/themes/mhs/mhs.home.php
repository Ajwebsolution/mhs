<?php

get_header();

/* TEMPLATE NAME:HomePage */

?>


        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">
                <?php 
                     if(have_rows( 'slider_details' ) ):
                     while(have_rows( 'slider_details' ) ): 
                          the_row();
                       $png_image = get_sub_field('png_image');
                        $main_image = get_sub_field('main_image');
                         $text_area = get_sub_field('text_area');
					     
                              ?>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(<?php echo $main_image;?>);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="<?php echo $png_image;?>" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <!-- <h2 class="main-slider__title">MHS Haustechnik <br> Gmbh <br> <span>140 Jahren bestes</span></h2> -->
                                        <p class="main-slider__text"><?php echo $text_area;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                 endwhile;
                     endif;
                            ?> 

               

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow1"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title"><?php the_field('number');?></p>
                                </div>
                                <h2 class="section-title__title"><?php the_field('heading1');?> </h2>
                            </div>
                        </div>
                        <?php
                             $args = array(
                               'post_type'      => 'partner_for_plumbing',
                               'posts_per_page' => 3,
                               'orderby'=>'date',
                               'order'=>'Asc',
            
                              );
           
                                    $loop = new WP_Query($args);
                             while ($loop->have_posts()) {
                                  $loop->the_post();
                              $imagepath = wp_get_attachment_image_src(
                                   get_post_thumbnail_id(),
                                   'large'
                                  );
            
                                      ?>

                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <div class="feature-one__count"></div>
                                    </div>
                                    <div class="feature-one__shape">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-one-shape-1.png" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><?php echo wp_trim_words(get_the_title(), 5); ?></h3>
                                    <p class="feature-one__text"><?php the_excerpt(); ?></p>
                                    <div class="buttons-wrap">
                                    <?php 
                                        $online_anfrage = get_field('online_anfrage','option'); 
                                            ?>
                                    <a href="<?php echo $online_anfrage['url'] ; ?>" class="thm-btn pricing__btn mt-2"><?php echo $online_anfrage['title'] ; ?></a>
                                    <a href="<?php the_permalink(); ?>" class="thm-btn pricing__btn mt-2">Weitere Details</a></div>
                                </div>
                            </div>
                        </div>
                        <?php } wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->

         <!--About Four Start-->
         <section class="about-four">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="about-four__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title"><?php the_field('subheading');?></p>
                                    <div class="section-title-shape-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title"><?php the_field('heading2');?></h2>
                            </div>
                            <p class="about-four__text-1"><?php the_field('text_area');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Four End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title"><?php the_field('subheading1');?></p>
                                        <div class="section-title-shape-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title"><?php the_field('heading3');?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-one__top-right">
                                <p class="services-one__top-text"><?php the_field('content3');?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="services-one__container">
                    <div class="row">
                    <?php
                             $args = array(
                               'post_type'      => 'leistungenor',
                               'posts_per_page' => 23,
                               'orderby'=>'date',
                               'order'=>'Asc',
            
                              );
           
                                    $loop = new WP_Query($args);
                             while ($loop->have_posts()) {
                                  $loop->the_post();
                              $imagepath = wp_get_attachment_image_src(
                                   get_post_thumbnail_id(),
                                   'large'
                                  );
            
                                      ?>
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="service-one__content">
                                    <h2 class="service-one__title"><?php echo wp_trim_words(get_the_title(), 35); ?></h2>
                                </div>
                            </div>
                        </div>
                        <?php } wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Get Insurance Start-->
        <section class="get-insurance">
            <div class="get-insurance-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/get-insurance-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-insurance__left">
                            <div class="get-insurance__img wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                                <img src="<?php the_field('image');?>" alt="">
                            </div>
                            <div class="get-insurance__author">
                                <p><?php the_field('sign_text');?></p>
                            </div>
                            <div class="get-insurance__circle"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get-insurance__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title"><?php the_field('subheading4');?></p>
                                    <div class="section-title-shape-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <p><?php the_field('content4');?></p>
                                <?php 
							if(have_rows( 'buttons') ):
                                while(have_rows( 'buttons') ): 
                                   the_row();
                                      
                                      $button = get_sub_field('button');
								  ?>
                                <a href="<?php echo $button['url'];?>" class="thm-btn pricing__btn mt-2"><?php echo $button['title'];?></a>
                                <?php endwhile;
				                       endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Get Insurance End-->

        <!--News One Start-->
        <section class="news-carousel-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="get-insurance__right">
                            <div class="section-title text-center">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title"><?php the_field('subheading2');?></p>
                                    <div class="section-title-shape-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png" alt="">
                                    </div>
                                    <h2 class="section-title__title"><?php the_field('heading5');?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thm-owl__carousel owl-theme owl-carousel news-carousel carousel-dot-style" data-owl-options='{
                        "items": 3,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":false,
                        "autoplay": false,
                        "nav":false,
                        "dots":true,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":2
                            },
                            "992":{
                                "items": 3
                            }
                        }
                    }'>
                    <?php
                               $args = array(
                               'post_type'      => 'mhs_impressionen',
                               'posts_per_page' => 23,
                               'orderby'=>'date',
                               'order'=>'Asc',
            
                              );
           
                                    $loop = new WP_Query($args);
                               while ($loop->have_posts()) {
                                  $loop->the_post();
                                $imagepath = wp_get_attachment_image_src(
                                   get_post_thumbnail_id(),
                                   'large'
                                  );
            
                                      ?>
                        <div class="item">
                       
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="<?php echo  $imagepath[0] ?>" alt="">
                                </div>
                                <div class="news-one__content">
                                    <ul class="list-unstyled pricing__points">
                                    <?php 
							if(have_rows( 'details') ):
                                while(have_rows( 'details') ): 
                                   the_row();
                                      
                                      $key_point = get_sub_field('key_point');
								  ?>

                                        <li>
                                            <div class="text bold">
                                           
                                                <p> <?php echo $key_point;?></p>
                                            </div>
                                            <div class="text">
                                                <p></p>
                                            </div>
                                        </li>
                                        <?php endwhile;
				                       endif; ?>

                                    </ul>
                                    <div class="news-one__read-more">
                                        <a href="<?php the_permalink(); ?>">Read More <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?php } wp_reset_postdata();?>
                      
                    </div>
                </div>
            </div>
        </section>
        <!--News One End-->

        <!--Tracking Start-->
        <section class="tracking">
            <div class="container">
                <div class="tracking__inner">
                    <div class="tracking-shape-1 float-bob-y">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tracking-shape-1.png" alt="">
                    </div>
                    <div class="tracking-shape-2 float-bob-x">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tracking-shape-2.png" alt="">
                    </div>
                    <div class="tracking-shape-3 float-bob-x">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tracking-shape-3.png" alt="">
                    </div>
                    <div class="tracking-shape-4 float-bob-y">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tracking-shape-4.png" alt="">
                    </div>
                    <div class="tracking__left">
                        <div class="tracking__icon">
                            <span class="icon-<?php the_field('icon');?>"></span>
                        </div>
                        <div class="tracking__content">
                      
                            <p class="tracking__sub-title"><?php the_field('subtitle6');?></p>
                            <h3 class="tracking__title">  <?php the_field('content');?></h3>
                        </div>
                    </div>
                    <div class="tracking__btn-box">
                    <?php 
							if(have_rows( 'buttons2') ):
                                while(have_rows( 'buttons2') ): 
                                   the_row();
                                      
                                      $button2 = get_sub_field('button2');
								  ?>
                        <a href="<?php echo $button2['url'];?>" class="thm-btn tracking__btn mt-2"><?php echo $button2['title'];?></a>
                        <?php endwhile;
				                       endif; ?>
                       
                </div>
            </div>
        </section>
        <!--Tracking End-->
        <?php
get_footer();
?>