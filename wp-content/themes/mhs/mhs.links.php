<?php

get_header();

/* TEMPLATE NAME:Links */

?>


<section class="page-header">
    <div class="page-header-shape-1"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/page-header-shape-1.png" alt=""></div>
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

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div class="get-insurance__right">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title"><?php the_field('subtitle');?></p>
                            <div class="section-title-shape-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png"
                                    alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png"
                                    alt="">
                            </div>
                            <h2 class="section-title__title"><?php the_field('title');?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="brand-one__main-content">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 3
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 5
                        }
                    }}'>

                        <div class="swiper-wrapper">
                            <?php 
							if(have_rows( 'partner_images') ):
                                while(have_rows( 'partner_images') ): 
                                   the_row();
                                      
                                      $partner_image = get_sub_field('partner_image');
								  ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $partner_image;?>" alt="">
                            </div>
                            <?php endwhile;
				                       endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3">
                <div class="brand-one__title">
                    <h2><?php the_field('heading');?></h2>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="brand-one__main-content">
                    <?php 
							if(have_rows( 'image') ):
                                while(have_rows( 'image') ): 
                                   the_row();
                                      
                                      $image = get_sub_field('image');
								  ?>
                    <div class="brand-slide">
                        <img src="<?php echo $image;?>" alt="">
                    </div>
                    <?php endwhile;
				                       endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div class="get-insurance__right">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title"><?php the_field('subtitlelinks');?></p>
                            <div class="section-title-shape-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png"
                                    alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png"
                                    alt="">
                            </div>
                            <h2 class="section-title__title"><?php the_field('titlelinks');?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="brand-one__main-content">
                    <?php 
							if(have_rows( 'links_images') ):
                                while(have_rows( 'links_images') ): 
                                   the_row();
                                      
                                      $links_image = get_sub_field('links_image');
								  ?>
                    <div class="brand-slide">
                        <img src="<?php echo $links_image;?>" alt="">
                    </div>
                    <?php endwhile;
				                       endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

<?php
get_footer();
?>