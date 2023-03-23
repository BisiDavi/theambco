<?
function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}
?>

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

    debug_to_console($page_slug,'page_slug');

    $postArgs = array(
        'post_type' => 'page',
        'name' => $page_slug
    );

    $blogPost = new WP_Query($postArgs);
    debug_to_console($blogPost,'blogPost');
    if($blogPost->have_posts()){
        while($blogPost->have_posts()){
            $blogPost->the_post();
            debug_to_console($blogPost,'blogPost');
            get_template_part('template-parts/blog/blog-view', 'blog-view');
        }
    }

    get_footer('home');
?>