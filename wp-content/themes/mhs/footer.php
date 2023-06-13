<footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/site-footer-bg.png);"></div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.html">
                                        <!-- <span>Mhs-ht.ch</span>  -->
                                         <img src="<?php echo wp_get_attachment_url(get_theme_mod('custom_logo'));?>" alt="">
                                    </a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text"><?php the_field('text','option');?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title"><?php the_field('heading','option');?></h3>
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                <?php 
							if(have_rows( 'contact_details','option' ) ):
                                while(have_rows( 'contact_details','option' ) ): 
                                   the_row();
                                      $icon = get_sub_field('icon');
                                      $details_links = get_sub_field('details_links');
								  ?>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-<?php echo $icon;?>"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="<?php echo $details_links['url'];?>"><?php echo $details_links['title'];?></a></p>
                                        </div>
                                    </li>
                                    <?php endwhile;
				                       endif; ?>
                                  
                                </ul>
                            </div>
                        </div>
                         <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp">
                            <div class="footer-widget__phone">
                                <div class="footer-widget__phone-icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="footer-widget__phone-text">
                                <?php 
                                       $link = get_field('phone_details','option'); 
                                     ?>
                                    <a href="<?php echo $link['url'] ; ?>"><?php echo $link['title'] ; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Newsletter</h3>
                               
                                <div class="footer-widget__newsletter-form">
                                <?php echo do_shortcode( '[newsletter_form type="minimal"]' ); ?> 
                                    </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyright <?php echo date('Y'); ?>by <a href="#">Mhs-ht</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" width="143" alt="" /> -->
                    <span><?php the_field('site_title','option');?></span> 
                </a>
            </div>
            <div class="mobile-nav__container"></div>
            

            <ul class="mobile-nav__contact list-unstyled">    
                  <?php 
							if(have_rows( 'email_&_phone_details','option' ) ):
                                while(have_rows( 'email_&_phone_details','option' ) ): 
                                   the_row();
                                      $iconemailp = get_sub_field('iconemailp');
                                      $email_phone_details = get_sub_field('email_&_phone_details');
								  ?>
                <li>
              
                    <i class="fa fa-<?php echo $iconemailp;?>"></i>
                    
                    <a href="<?php echo  $email_phone_details['url'];?>"><?php echo  $email_phone_details['title'];?></a>
                </li>
                <?php endwhile;
				                       endif; ?>
              
            </ul>
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/insur.js"></script>

	
	<?php wp_footer();?>
</body>
</html>