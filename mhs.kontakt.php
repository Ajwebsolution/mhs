<?php

get_header();

/* TEMPLATE NAME:Kontakt */

?>


<section class="page-header">
            <div class="page-header-shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li><span>/</span></li>
                        <li><?php echo get_the_title();?></li>
                    </ul>
                    <h2> <?php echo get_the_title();?></h2>
                </div>
            </div>
        </section>


        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title"><?php the_field('subtitlekon');?></p>
                                    <div class="section-title-shape-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title"><?php the_field('titlekon');?></h2>
                            </div>
                            <?php 
							if(have_rows( 'contact_us') ):
                                while(have_rows( 'contact_us') ): 
                                   the_row();
                                   $iconcon = get_sub_field('iconcon');
                                      $contact_info = get_sub_field('contact_info');
								  ?>
                            <div class="contact-page__call-email">
                                <div class="contact-page__call-icon">
                                    <i class="fas fa-<?php echo $iconcon;?>"></i>
                                </div>
                                <div class="contact-page__call-email-content">
                                    <h4>
                                        <a href="<?php echo $contact_info['url'];?>" class="contact-page__call-number"><?php echo $contact_info['title'];?></a>
                                    
                                    </h4>
                                </div>
                            </div>
                            <?php endwhile;
				                       endif; ?>
                       
                    
                            <!-- <p class="contact-page__location-text">Gewerbestrasse 3 <br> CH-6340 Baar</p> -->
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                <div class="comment-one__form contact-form-validated">
                                    <?php echo do_shortcode(get_field('form'));?>
                                </div>
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->
        
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
        
        <!--Google Map Start-->
        <section class="google-map-two">
            <?php the_field('google_map');?>
        </section>
        <!--Google Map End-->
        <?php
get_footer();
?>