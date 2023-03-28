<?php

/**
 *
 * @package Wordpress
 * @subpackage Gallery Page
 * @since TheAmbulanceCompany 1.0
 */

get_header('home');


// load slider post loop
get_template_part('template-parts/gallery/index', 'gallery');

get_footer('home');
?>