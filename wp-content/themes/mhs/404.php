<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package dbtuning
 */

get_header();
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

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="section-headline white-headline text-center mb-10 p-tb-20">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Page Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
                <div class="error-actions">
                
                <a href="<?php echo site_url();?>" class="btn btn-primary btn-lg" >
                        Take Me Home </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
