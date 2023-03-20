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
get_template_part('template-parts/blog/medium-post', 'medium-post');


get_footer('home');

?>