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
                        <li><?php echo get_the_title();?></li>
                    </ul>
                    <h2> <?php echo get_the_title();?></h2>
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
                            <p class="section-sub-title"><?php the_field('top_content');?></p>
                            <div class="section-title-shape-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-1.png"
                                    alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-title-shape-2.png"
                                    alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php
              
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $leistungenor = new WP_Query( array('posts_per_page'=>2,
                                 'post_type'=>'leistungenor',
                                 'paged' => $paged,
                                 ) ,
                            ); 
				
                            ?>
            <?php while ($leistungenor -> have_posts()) : $leistungenor -> the_post(); ?>

            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="service-one__img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="service-one__content">
                        <div class="services-one__icon">
                            <span class="icon-briefcase"></span>
                        </div>
                        <h2 class="service-one__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
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
        <div class="row">
            <div class="blog-pagination my-5">
                <?php
                    $big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $leistungenor->max_num_pages
) );?>
            </div>
            <style type="text/css">
            .blog-pagination a,
            span.page-numbers.current {
                display: inline-block;
                background-color: #f6f6f6;
                padding: 10px 16px;
                border: 1px solid #16243d;
                color: #000;
            }

            span.page-numbers.current {
                background-color: #16243d;
                color: #fff;
                font-weight: 600;
            }

            .blog-pagination {
                display: block;
                text-align: center;
            }
            </style>
        </div>
    </div>
</section>

<?php
get_footer();
?>