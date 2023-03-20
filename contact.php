<?php

/**
 *
 * @package Wordpress
 * @subpackage TheAmbulanceCompany
 * @since TheAmbulanceCompany 1.0
 */

get_header('home');


// load slider post loop
get_template_part('template-parts/home/hero-banner', 'hero-banner');

get_template_part('template-parts/home/about-us', 'about-us');

get_template_part('template-parts/home/contact-us', 'contact-us');

get_template_part('template-parts/home/supporter-slider-view', 'supporter-slider-view');

get_template_part('template-parts/home/contact-us-view', 'contact-us-view');

get_footer('home');

?>