<?php

get_header();

/* TEMPLATE NAME:Jobs */

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

<section class="benefits">
    <div class="benefits-bg"
        style="background-image: url(<?php the_field('image');?>);"></div>
    <div class="benefits-bg-2"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/benefits-bg-2.jpg);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="benefits__left">
                    <div class="section-title text-left">
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
                        </div>
                        <h2 class="section-title__title"><?php the_field('title');?></h2>
                    </div>
                    <?php 
                          $button = get_field('button'); 
                                     ?>
                    <a href="<?php echo $button['url'];?>" class="thm-btn pricing__btn mt-2"><?php echo $button['title'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Benefits End-->

<section class="benefits">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="benefits__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title"><?php the_field('heading');?></h2>
                    </div>

                    <div class="job-wrap">

                        <div class="benefits__point-box">
                            <p class="benefits__text"><?php the_field('subtitlel');?></p>
                            <ul class="list-unstyled benefits__point">
                            <?php 
							if(have_rows( 'left_side_text') ):
                                while(have_rows( 'left_side_text') ): 
                                   the_row();
                                      
                                      $text = get_sub_field('text');
								  ?>

                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $text;?></p>
                                    </div>
                                </li>
                                <?php endwhile;
				                       endif; ?>
                            </ul>
                            <?php 
                          $kontakt_button = get_field('kontakt_button'); 
                                     ?>
                            <a href="<?php echo $kontakt_button['url'];?>" class="thm-btn pricing__btn mt-2"><?php echo $kontakt_button['title'];?></a>
                        </div>

                        <div class="benefits__point-box">
                            <p class="benefits__text"><?php the_field('subtitler');?></p>
                            <ul class="list-unstyled benefits__point benefits__point-two">
                            <?php 
							if(have_rows( 'right_side_text') ):
                                while(have_rows( 'right_side_text') ): 
                                   the_row();
                                      
                                      $content = get_sub_field('content');
								  ?>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $content;?></p>
                                    </div>
                                </li>
                                <?php endwhile;
				                       endif; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>