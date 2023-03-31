<?php

/**
 *
 * @package Wordpress
 * @subpackage TheAmbulanceCompany
 * @since TheAmbulanceCompany 1.0
 */

get_header('home');


// load slider post loop
get_template_part('template-parts/contact/index', 'contact');

get_template_part('template-parts/contact/faqs', 'faqs');

//map
get_template_part('template-parts/contact/map', 'map');

get_footer('home');
?>