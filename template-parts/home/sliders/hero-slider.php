<?php

/**
 * @package Wordpress
 * @subpackage TheAmbulanceCompany
 * @since 1.0
 */

?>


<? 
 $evenOrOdd = $args['index'] % 2;
 $index = $args['index'];
 $imageOrder = $evenOrOdd === 0 ? "order-2" : "order-1";
 $textOrder = $evenOrOdd === 1 ? "order-2" : "order-1";
 $mobileText = wp_is_mobile() ? wp_trim_words($post->post_content,40,'...') : $post->post_content;
 ?>

<div class="swiper-slide slider_<? echo $index; ?>" id="swiperSlider">
    <div class="d-lg-flex flex-column flex-lg-row align-items-center content banner justify-content-between">
        <div class="image_view col-lg-5 px-0 col-12 <?php echo $imageOrder; ?>">
            <div class="overlay"></div>
            <?php the_post_thumbnail("hero-banner"); ?>
            <div class="mobile-hero-text">
                <?php the_title(' <h3 class="title">', '</h3>'); ?>
                <?php echo $mobileText; ?>
            </div>
        </div>
        <div id="hero_text" class="col-lg-5 d-lg-flex banner_text d-none flex-column animate__animated align-items-center <? echo $textOrder; ?>">
            <?php the_title(' <h3 class="title">', '</h3>'); ?>
            <?php the_content(); ?>
        </div>
    </div>
</div>
