<?php

/**
 *
 * @package Wordpress
 * @subpackage TheAmbulanceCompany
 * @since TheAmbulanceCompany 1.0
 */

    get_header('home');

    function debug_to_console($data, $context = 'Debug in Console') {

        // Buffering to solve problems frameworks, like header() in this and not a solid return.
        ob_start();
    
        $output  = 'console.info(\'' . $context . ':\');';
        $output .= 'console.log(' . json_encode($data) . ');';
        $output  = sprintf('<script>%s</script>', $output);
    
        echo $output;
    }


    global $wp;
    $page_url = home_url($wp->request);
    $page_slug = explode('/',$page_url)[3];

    $postArgs = array(
        'post_type' => 'post',
        'name' => $page_slug,
        'cat' => 16
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