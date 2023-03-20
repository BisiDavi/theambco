<?php

/**
 * @package Wordpress
 * @subpackage supporter-slider
 * @since 1.0
 */

?>


<? $post_title = get_post_field('post_title',53);?>
<? $content_post = get_post_field('post_content',53);?>
<? global $wp; ?>

<div class="supporter-slider-view py-lg-5">
    <div class="container supporters py-5">
        <h3><? echo $post_title ?></h3>
        <? if($wp->request === "about-us"){ ?>
        <? echo $content_post; ?>
        <? }?>

        <div class="supporter-slider mt-5">
            <div class="swiper sliderSwiper mx-5">
                <div class="swiper-wrapper">
                    <? $postArgs = array(
                            'post_type' => 'post', 
                            'cat' => 9, 
                        );
                        $sliderPost = new WP_Query($postArgs);
                        if ($sliderPost->have_posts()) {
                            while ($sliderPost->have_posts()) {
                                $sliderPost->the_post();
                                get_template_part('template-parts/home/supporter-slider', 'supporter-slider');
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