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

<div class="searchp py-4">
		<?php if ( have_posts() ) : ?>
<div class="rows">

		</div>
		<div class="contentbloc">

			<?php while(have_posts()) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'search' ); ?>
			<?php endwhile; ?>
			<div class="postnavi">
				<?php the_posts_navigation(); ?>	
			</div>
		</div>
		<?php 	else :?>
		<div class="row py-5">
			<?php get_template_part( 'template-parts/content', 'none' );?>		
		</div>		
		<?php endif; ?>
</div>
</div>
<?php
get_footer();
