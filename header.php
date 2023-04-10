<?php

/**
 *The Header.
 *
 * This is the template that displays the <head> section
 *
 * @package Wordpress
 * @subpackage TheAmbulanceCompany
 * @since TheAmbulanceCompany 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Ambulance Company | Providing swift, quality emergency care. </title>
    <meta name="description" content="Are you in need of Oxygen? The Ambulance Company helps patients, hospitals and healthcare providers to get oxygen fast in Lagos, Nigeria"  />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="theambulance">
        <? get_template_part('template-parts/loader', 'loader'); ?>
        <header>
            <? get_template_part('template-parts/top-banner', 'top-banner'); ?>
            <nav class="container nav px-0">
                <div class="desktop w-100 d-lg-flex align-items-center justify-content-between">
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-menu',
                        'menu_id' => 'menu'
                    ));
                    ?>
                </div>
                <div class="show-mobile">
                    <?php the_custom_logo(); ?>
                    <div id="mobileMenu" class="hamburger-menu">
                        <a href="#" id="menuButton" class="menuButton">
                            <span class="menuText">
                                <b></b>
                            </span>
                        </a>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'mobile-menu',
                            'menu_class' => 'sub-menu animate__animated',
                        ));
                        ?>
                    </div>
                </div>
            </nav>
        </header>
        <main>