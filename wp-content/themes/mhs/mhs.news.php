<?php

get_header();

/* TEMPLATE NAME:news */

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
            <h2>Latest <?php echo get_the_title();?></h2>
        </div>
    </div>
</section>

<section class="news-one">
    <div class="container">
        <div class="row">
            <?php
              
              $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
              $mhsnews = new WP_Query( array('posts_per_page'=>3,
                               'post_type'=>'mhsnews',
                               'paged' => $paged,
                               ) ,
                          ); 
              
                          ?>
            <?php while ($mhsnews -> have_posts()) : $mhsnews -> the_post(); ?>


            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="news-one__tag">

                            <p><i class="far fa-folder"></i>NEWS</p>

                        </div>
                        <div class="news-one__arrow-box">
                            <a href="<?php the_permalink();?>" class="news-one__arrow">
                                <span class="icon-right-arrow1"></span>
                            </a>
                        </div>
                    </div>
                    <div class="news-one__content">
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="<?php the_permalink();?>"><i class="far fa-calendar"></i>
                                    <?php echo get_the_Date(); ?> </a>
                            </li>
                        </ul>
                        <h3 class="news-one__title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                        <p class="news-one__text"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
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
    'total' => $mhsnews->max_num_pages
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