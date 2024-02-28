<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css"/>
    <style>
        @font-face {
            font-family:'Montserrat';
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Regular.eot');
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Regular.eot?#iefix') format('embedded-opentype'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Regular.woff2') format('woff2'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Regular.woff') format('woff'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Regular.svg#Montserrat Regular') format('svg');
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-2044;
        }
        @font-face {
            font-family:'Montserrat Black';
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Black.eot');
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Black.eot?#iefix') format('embedded-opentype'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Black.woff2') format('woff2'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Black.woff') format('woff'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Black.svg#Montserrat Black') format('svg');
            font-weight: 900;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-2044;
        }
        
        @font-face {
            font-family:'Montserrat Medium';
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Medium.eot');
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Medium.eot?#iefix') format('embedded-opentype'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Medium.woff2') format('woff2'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Medium.woff') format('woff'),
                url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Montserrat Medium.svg#Montserrat Medium') format('svg');
            font-weight: 500;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-2044;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- header -->
    <header>
        <?php

           $generalslug = 'site-general-settings';
$generalpageid = get_id_by_slug($generalslug);

         ?>
        <div class="container top_head">
            <div class="row justify-content-between">
                <div class="col-12 d-flex flex-wrap justify-content-between">
                    <ul class="left_info">
 <li><a href="tel:<?php echo get_field('phone',$generalpageid); ?>"><i class="bi bi-telephone"></i> <?php echo get_field('phone',$generalpageid); ?></a></li>
                        <li><a href="mailto:<?php echo get_field('email',$generalpageid); ?>"><i class="bi bi-envelope"></i> <?php echo get_field('email',$generalpageid); ?></a></li>
                    </ul>
                    <ul class="right_info">
                        <li><a href="<?php echo get_field('facebook',$generalpageid); ?>" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="<?php echo get_field('twitter',$generalpageid); ?>" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                        <li><a href="<?php echo get_field('linkedin',$generalpageid); ?>" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="btmHeader">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <span class="logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_field('logo',$generalpageid); ?>" alt="" class="img-fluid"></a></span>
                        <div>
                            <nav>
                                <div class="hamburger" id="hamburger-1">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                              
                                <?php wp_nav_menu(array('menu' => 'mainmenu', 'container' => '', 'items_wrap' => '<ul>%3$s</ul>' )); ?>
                            </nav>
                            <span><a href="tel:<?php echo get_field('phone',$generalpageid); ?>" class="btn btn-sm btn-outline-success">Call Now</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>