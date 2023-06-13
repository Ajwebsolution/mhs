<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mydocs
 */

get_header();
while ( have_posts() ) : the_post();
?>
      <!-- page__title-start -->
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
         <!-- page__title-end -->
<section id="post-<?php the_ID(); ?>" class="py-5">
   <div class="container">
      <div class="row mtli-row-clearfix">
         <div class="col-sm-12">
            <div class="campaign maxwidth500 mb-sm-30">
				
               
            </div>
            <div class="detailss">
               <?php the_content();?>
            </div>
         </div>
      </div>
   </div>
</section>


<?php
endwhile;
get_footer();
?>