<?php

/**
 *
 * @package Wordpress
 * @subpackage Gallery Page
 * @since TheAmbulanceCompany 1.0
 */

get_header('home');


// load slider post loop
get_template_part('template-parts/contact/index', 'contact');

get_footer('home');
?>