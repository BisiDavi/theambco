<?php

/**
 * @package Wordpress
 * @subpackage Hero banner
 * @since 1.0
 */

?>
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
<? 
    $postArgs = array(
        'post_type' => 'post', 
        'cat' => 5, 
        'order' => 'DESC',
        'orderby' => 'name'
    );
    $sliderPost = new WP_Query($postArgs);
?>
<div class="hero_banner">
    <div class="container-fluid swiper_slider">
        <div class="swiper heroSwiper mx-lg-5 py-3 py-lg-0">
            <div class="swiper-wrapper py-lg-3 pb-lg-5">
                <? 
                    $index = 0;
                    if ($sliderPost->have_posts()) {
                        while ($sliderPost->have_posts()) {
                            $index++;
                            $sliderPost->the_post();
                            get_template_part('template-parts/home/sliders/hero-slider', 'hero-slider', array(
                                'index' => $index
                            ));
                        }
                    } 
                ?>
            </div>
            <div class="swb swiper-button-prev swiperButtonPrev"></div>
            <div class="swb swiper-button-next swiperButtonNext"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>