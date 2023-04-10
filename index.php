<?php

/**
 *
 * @package Wordpress
 * @subpackage TheAmbulanceCompany
 * @since TheAmbulanceCompany 1.0
 */

get_header('home');


// load slider post loop
get_template_part('template-parts/home/sliders/hero-banner', 'hero-banner');

get_template_part('template-parts/home/about-us', 'about-us');

get_template_part('template-parts/home/services-view', 'services-view');

get_template_part('template-parts/home/contact-us', 'contact-us');

get_template_part('template-parts/home/sliders/blog-slider', 'blog-slider');

get_template_part('template-parts/home/statistics', 'statistics');

get_template_part('template-parts/home/contact-us-view', 'contact-us-view');

get_template_part('template-parts/home/testimonial-view', 'testimonial-view');

get_template_part('template-parts/home/sliders/supporter-slider-view', 'supporter-slider-view');

get_template_part('template-parts/home/newsletter', 'newsletter');

get_footer('home');

?>