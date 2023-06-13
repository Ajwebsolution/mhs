<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mhs
 */

get_header();
?>

	

        <section class="page-header">
            <div class="page-header-shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li><span>/</span></li>
                        <li><?php the_title();?></li>
                    </ul>
                    <h2><?php the_title();?></h2>
                </div>
            </div>
        </section>

        <section class="news-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>NEWS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="#" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="#"><i class="far fa-calendar"></i> 1 Oktober, 2022 </a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="#">Herzlich willkommen im Team!</a></h3>
                                <p class="news-one__text">Wir freuen uns per 10.10.2022 unseren neuen Projektleiter Heizung, Herr Beat Amstad, in unserem Team willkommen zu heissen und wünschen ihm einen guten Start.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-1-3.jpg" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>NEWS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="#" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="#"><i class="far fa-calendar"></i> 1 Juli, 2022 </a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="#">Herzliche Gratulation!</a></h3>
                                <p class="news-one__text">Wir gratulieren Philipp Hurschler zum erfolgreichen Abschluss seiner Zweitlehre als Heizungsmonteur. Wir sind stolz auf dich!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-1-2.jpg" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>NEWS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="#" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="#"><i class="far fa-calendar"></i> 1 April, 2022 </a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="#">Relaunch unserer Webseite</a></h3>
                                <p class="news-one__text">Wir freuen uns, Ihnen unsere neue Webseite präsentieren zu können. Unser Internetauftritt im neuen Design ist nun übersichtlicher gegliedert, damit Sie schnell und unkompliziert einen Einblick in unser Leistungsspektrum erhalten.</p>
                                <p class="news-one__text">Gerne können Sie uns Verbesserungsvorschläge senden, wir freuen uns über Lob und Kritik.</p>
                                <p class="news-one__text">Nun wünschen wir Ihnen an dieser Stelle erst einmal viel Spass auf unserer neuen Webseite!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php

get_footer();
