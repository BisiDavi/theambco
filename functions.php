<?php

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */

// load stylesheeets

function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), false, 'all');
    wp_enqueue_style('swiper');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/index.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('media-query', get_template_directory_uri() . '/assets/css/index.mediaquery.css', array(), false, 'all');
    wp_enqueue_style('media-query');

    wp_register_style('menu', get_template_directory_uri() . '/assets/css/menu.css', array(), false, 'all');
    wp_enqueue_style('menu');  

    wp_register_style('animation', get_template_directory_uri() . '/assets/css/animation.css', array(), false, 'all');
    wp_enqueue_style('animation');

    wp_register_style('header_style', get_template_directory_uri() . '/assets/css/header.css', array(), false, 'all');
    wp_enqueue_style('header_style');

    wp_register_style('banner', get_template_directory_uri() . '/assets/css/banner.css', array(), false, 'all');
    wp_enqueue_style('banner');

    wp_register_style('font-css', get_template_directory_uri() . '/assets/fonts/stylesheet.css', array(), false, 'all');
    wp_enqueue_style('font-css');

    wp_register_style('supporter-slider', get_template_directory_uri() . '/assets/css/supporter-slider.css', array(), false, 'all');
    wp_enqueue_style('supporter-slider');

    wp_register_style('about-mission', get_template_directory_uri() . '/assets/css/about-mission.css', array(), false, 'all');
    wp_enqueue_style('about-mission');

    wp_register_style('our-leadership', get_template_directory_uri() . '/assets/css/our-leadership.css', array(), false, 'all');
    wp_enqueue_style('our-leadership');

    wp_register_style('blog-view', get_template_directory_uri() . '/assets/css/blog-view.css', array(), false, 'all');
    wp_enqueue_style('blog-view');

    wp_register_style('statistics', get_template_directory_uri() . '/assets/css/statistics.css', array(), false, 'all');
    wp_enqueue_style('statistics');

    if(is_home()){
        wp_register_style('testimonial', get_template_directory_uri() . '/assets/css/testimonial.css', array(), false, 'all');
        wp_enqueue_style('testimonial');
    }

    if(is_page('blog')){
        wp_register_style('blog', get_template_directory_uri() . '/assets/css/blog.css', array(), false, 'all');
        wp_enqueue_style('blog');
    }

    if(is_page('services')){
        wp_register_style('services', get_template_directory_uri() . '/assets/css/services.css', array(), false, 'all');
        wp_enqueue_style('services');
    }

    if(is_page('contact')){
        wp_register_style('contact', get_template_directory_uri() . '/assets/css/contact.css', array(), false, 'all');
        wp_enqueue_style('contact');
    }

    if(is_page('gallery')){
        wp_register_style('gallery', get_template_directory_uri() . '/assets/css/gallery.css', array(), false, 'all');
        wp_enqueue_style('gallery');
        wp_register_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css', array(), false, 'all');
        wp_enqueue_style('lightbox');
    }
}

add_action('wp_enqueue_scripts', 'load_css');

// load js
function load_js()
{
    wp_enqueue_script('jquery');
    
    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', array(), '1.0.0', true);
    
    if(is_home() || is_page('about-us') || is_page('services') ){
        // The core GSAP library
        wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true );
        // ScrollTrigger - with gsap.js passed as a dependency
        wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, true );
        wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('swiper',  get_template_directory_uri() . '/assets/js/swiper.js', array('swiper-bundle','gsap-js'), '1.0.0', true);
    }
    
    if(is_home()){
        wp_enqueue_script('about-us', get_template_directory_uri() . '/assets/js/about-us.js', array(), '1.0.0', true);
        wp_enqueue_script('blog-slider', get_template_directory_uri() . '/assets/js/blog-slider.js', array('swiper-bundle'), '1.0.0', true);
        wp_enqueue_script('statistics', get_template_directory_uri() . '/assets/js/statistics.js', NULL, NULL, true);
        wp_enqueue_script('supporter-slider', get_template_directory_uri() . '/assets/js/supporter-slider.js', array('swiper-bundle'), '1.0.0', true);
        wp_enqueue_script('testimonial-slider', get_template_directory_uri() . '/assets/js/testimonial-slider.js', array('swiper-bundle'), '1.0.0', true);
    }

    if(is_page('gallery')){
        wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js', NULL, NULL, true);
    }

    if(is_page('contact')){
        wp_register_script('faq', get_template_directory_uri() . '/assets/js/faq.js', array(), '1.0.0', true);
        wp_enqueue_script('faq');
    }
}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

// menus
register_nav_menus(array(
    'top-menu' => 'Top Menu',
    'mobile-menu' => 'Mobile Menu'
));

add_image_size('blog-large', 1000, 5500, false);
add_image_size('blog-small', 81, 75, true);
