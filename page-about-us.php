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

get_template_part('template-parts/about-us/about-mission', 'about-mission');

get_template_part('template-parts/about-us/our-leadership', 'our-leadership');

get_template_part('template-parts/about-us/our-leadership', 'our-leadership');

get_template_part('template-parts/home/supporter-slider-view', 'supporter-slider-view');

get_template_part('template-parts/about-us/contact-us-view', 'about-us-contact-us-view');

get_footer('home');

?>