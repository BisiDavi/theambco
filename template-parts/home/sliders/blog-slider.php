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

<div class="blog-slider-view py-lg-5">
    <div class="container supporters py-5">
        <h3> Our Blog Post</h3>
        <div class="blog-slider mt-5">
            <div class="swiper sliderSwiper mx-5">
                <div class="swiper-wrapper">
                    <? $postArgs = array(
                            'post_type' => 'post', 
                            'cat' => 16, 
                            'posts_per_page' => 10
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
            <div class="paginate-slider">
                <div class="swiper-pagination sliderSwiperPagination"></div>
            </div>
            <div class="swiper-button-prev swiperButtonPrev"></div>
            <div class="swiper-button-next swiperButtonNext"></div>
        </div>
    </div>
</div>