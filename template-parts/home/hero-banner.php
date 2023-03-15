<?php

/**
 * @package Wordpress
 * @subpackage Hero banner
 * @since 1.0
 */

?>

<div class="container-fluid swiper_slider">
    <div class="swiper mx-lg-5 py-5 py-lg-0 m-3">
        <div class="swiper-wrapper py-lg-5">
            <? $postArgs = array(
                'post_type' => 'post', 
                'cat' => 5, 
                'order' => 'DESC',
                'orderby' => 'name'
            );
                $sliderPost = new WP_Query($postArgs);
                $index = 0;
                if ($sliderPost->have_posts()) {
                    while ($sliderPost->have_posts()) {
                        $index++;
                        $sliderPost->the_post();
                        get_template_part('template-parts/home/hero-slider', 'hero-slider', array(
                            'index' => $index
                        ));
                    }
                } 
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>