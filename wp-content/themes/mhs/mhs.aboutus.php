<?php

get_header('about');

/* TEMPLATE NAME:Über uns */

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



<!--About Four Start-->
<section class="about-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-four__left">
                    <div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-four__img">
                            <img src="<?php the_field('image'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-four__right">
                    <div class="section-title text-left">
                        <h2 class="section-title__title"><?php the_field('heading'); ?></h2>
                    </div>
                    <p class="about-four__text-2"><?php the_field('details'); ?></p>
                    <div class="about-four__founder">
                        <div class="about-four__founder-img">
                            <img src="<?php the_field('profile_image'); ?>" alt="">
                        </div>
                        <div class="about-four__founder-content">

                            <p class="about-four__founder-sub-title"><?php the_field('profile'); ?></p>
                            <h3 class="about-four__founder-name"><?php the_field('sign'); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Four End-->



<!--Team Page Start-->
<section class="team-page-carousel">
    <div class="container">
        <div class="col-xl-12">
            <div class="get-insurance__right">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title"><?php the_field('subtitle'); ?></p>
                        <div class="section-title-shape-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png"
                                alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png"
                                alt="">
                        </div>
                        <h2 class="section-title__title"><?php the_field('title'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="thm-owl__carousel owl-theme owl-carousel team-carousel carousel-dot-style" data-owl-options='{
                    "items": 3,
                    "margin": 108,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
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
                           if(have_rows( 'team_details' ) ):
                             while(have_rows( 'team_details' ) ): 
                                 the_row();
                                 $team_image = get_sub_field('team_image');
                                 $designation = get_sub_field('designation');
                                 $name = get_sub_field('name');
                            ?>
            <div class="item">
                <div class="team-one__single">
                    <div class="team-one__img">
                        <div class="team-one__img-box">
                            <img src="<?php echo $team_image;?>" alt="">
                        </div>
                    </div>
                    <div class="team-one__content">
                        <p class="team-one__sub-title"><?php echo $designation;?></p>
                        <h3 class="team-one__name"><?php echo $name;?></h3>
                        <ul class="list-unstyled team-one">
                            <?php 
							           if(have_rows( 'contact_details' ) ):
                                     while(have_rows( 'contact_details' ) ): 
                                         the_row();
                                      $contact_details_team = get_sub_field('contact_details_team');
                                      $contact_icons = get_sub_field('contact_icons');
								                ?>
                            <li><a href="<?php echo $contact_details_team['url'];?>"><i
                                        class="fas fa-<?php echo $contact_icons;?>"></i><?php echo $contact_details_team['title'];?></a>
                            </li>
                            <?php endwhile;
				                                  endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
            <?php endwhile;
				         endif; ?>

        </div>
    </div>
</section>
<!--Team Page End-->


<!--Testimonial Two Start-->
<section class="testimonial-two">
    <div class="testimonial-two-shape-1"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-two-shape-1.png);">
    </div>
    <div class="container">
        <div class="row">
            <?php 
							           if(have_rows( 'testimonial' ) ):
                                       while(have_rows( 'testimonial' ) ): 
                                       the_row();
                                       $testimonial_subtitle = get_sub_field('testimonial_subtitle');
                                       $testimonial_title = get_sub_field('testimonial_title');
                                       $testimonial_details = get_sub_field('testimonial_details');
								         ?>

            <div class="col-xl-6">
                <div class="testimonial-two__left">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title"><?php echo $testimonial_subtitle;?></p>
                            <div class="section-title-shape-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png"
                                    alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png"
                                    alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title"><?php echo $testimonial_title;?></h2>
                    </div>
                    <p class="testimonial-two__text"><?php echo $testimonial_details;?></p>
                </div>
            </div>
            <?php endwhile;
				         endif; ?>


        </div>
    </div>
</section>
<!--Testimonial Two End-->

<!--Portfolio Start-->
<section class="portfolio">
    <div class="container">
        <div class="row ">
            <div class="col-xl-12">
                <div class="get-insurance__right">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title"><?php the_field('gallery_subtitle');?></p>
                            <div class="section-title-shape-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png"
                                    alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png"
                                    alt="">
                            </div>
                            <h2 class="section-title__title"><?php the_field('gallery_title');?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
							           if(have_rows( 'gallery' ) ):
                                       while(have_rows( 'gallery' ) ): 
                                       the_row();
                                       $gallery_image = get_sub_field('gallery_image');
								         ?>

            <div class="col-xl-4 col-lg-6 col-md-6 filter-item">
                <div class="portfolio__single">
                    <div class="portfolio__img">
                        <img src="<?php echo $gallery_image;?>" alt="">
                        <div class="portfolio__plus">
                            <a href="<?php echo $gallery_image;?>" class="img-popup"><span class="icon-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
				            endif; ?>
        </div>
    </div>
</section>
<!--Portfolio End-->
<?php
       
get_footer('about');

?>