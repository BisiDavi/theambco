<?php

/**
 * @package Wordpress
 * @subpackage blog-slider
 * @since 1.0
 */

?>

<? $post_title = get_post_field('post_title',53);?>
<? $content_post = get_post_field('post_content',53);?>
<? global $wp; ?>

<div class="blog-slider-view py-lg-5 container">
    <h3 class="text-decoration-none text-center fw-600 mt-4"> Our Blog Post</h3>
    <div class="blog-slider-section">
        <div class="blog-grid-view mt-5">
            <? $postArgs = array(
                    'post_type' => 'post', 
                    'cat' => 16, 
                    'posts_per_page' =>3,
                    'orderby' => 'rand'
                );
                $sliderPost = new WP_Query($postArgs);
                if ($sliderPost->have_posts()) {
                    while ($sliderPost->have_posts()) {
                        $sliderPost->the_post();
                        get_template_part('template-parts/home/sliders/blog-slider-view', 'blog-slider');
                    }
                } 
            ?>
        </div>
    </div>
    <a class="btn mt-5 mx-auto justify-content-center d-flex white_green" href="/blog">
        Visit our Blog
    </a>
</div>