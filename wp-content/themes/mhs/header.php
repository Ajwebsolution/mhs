<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link rel="icon" type="image/png"href="" />
    <link rel="manifest" href="" />
   
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontstyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylesheet.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/insur.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/insur-responsive.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="<?php echo site_url();?>">

                                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('custom_logo'));?>" alt="">
                                       
                                    </a>
                                </div>
                                <div class="main-menu__main-menu-box">
                                    <div class="main-menu__main-menu-box-inner">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    
                                        <?php
                                            wp_nav_menu(
                                                 array(
                                              'theme_location' => 'primary-menu',
                                               'container'=>false,
                                                'menu_class'=>'main-menu__list',
                                                'menu_id'=> 'off-canvas-menu',
                                               )
                                                 )?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>