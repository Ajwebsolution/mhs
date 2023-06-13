<?php

get_header();

/* TEMPLATE NAME:leistungen */

?>



<section class="page-header">
            <div class="page-header-shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li><span>/</span></li>
                        <li><?php the_title();?></li>
                    </ul>
                    <h2><?php the_title();?></h2>
                </div>
            </div>
        </section>

        <!--Insurance Page One Start-->
        <section class="insurance-page-one">
            <div class="services-one__container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="get-insurance__right">
                            <div class="section-title text-center">
                                <div class="section-sub-title-box">
                                    <h2 class="section-title__title"><?php echo get_the_archive_title();?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
             <?php while(have_posts()) : the_post(); ?>

                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-briefcase"></span>
                                </div>
                                <h2 class="service-one__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="service-one__text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="thm-btn pricing__btn mt-2">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php  
                   endwhile; 
                      wp_reset_postdata();
                               ?>

                </div>
            </div>
        </section>

        <?php
get_footer();
?>