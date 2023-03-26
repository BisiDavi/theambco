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

<div class="blog-slider-view py-lg-5 container-fluid">
    <h3 class="text-decoration-none text-center fw-600 mt-4"> Our Blog Post</h3>
    <div class="blog-slider-section">
        <div class="blog-slider mt-5 d-flex flex-column">
            <div class="swiper blogSwiper mx-5">
                <div class="swiper-wrapper">
                    <? $postArgs = array(
                            'post_type' => 'post', 
                            'cat' => 16, 
                            'posts_per_page' => 10,
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
            <div class="paginate-slider">
                <div class="swiper-pagination blogSwiperPagination"></div>
            </div>
            <div class="swiper-button-prev blogSwiperButtonPrev"></div>
            <div class="swiper-button-next blogSwiperButtonNext"></div>
        </div>
    </div>
    <button class="btn mt-5 mx-auto justify-content-center d-flex about_us_btn" href="/blog">
        Read More
    </button>
</div>