<?php

/**
 *
 * @package Wordpress
 * @subpackage TheAmbulanceCompany
 * @since TheAmbulanceCompany 1.0
 */

    get_header('home');


    global $wp;
    $page_url = home_url($wp->request);
    $page_slug = explode('/blog/',$page_url)[1];

    $postArgs = array(
        'post_type' => 'page',
        'name' => $page_slug
    );

    $blogPost = new WP_Query($postArgs);
    if($blogPost->have_posts()){
        while($blogPost->have_posts()){
            $blogPost->the_post();
            get_template_part('template-parts/blog/blog-view', 'blog-view');
        }
    }

    get_footer('home');
?>