<?php

/**
 *
 * @package Wordpress
 * @subpackage TheAmbulanceCompany
 * @since TheAmbulanceCompany 1.0
 */

get_header('home');

// load slider post loop
get_template_part('template-parts/blog/blog-page', 'blog-page');

get_footer('home');
?>