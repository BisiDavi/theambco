<?php

/**
 * @package Wordpress
 * @subpackage Testimonial
 * @since 1.0
 */

?>

<?
    $name = get_post_field('name', $post->ID);
    $testimonial = wp_trim_words($post->post_content, 20, '...');
?>

<div class="swiper-slide testimonial">
    <img src="<? echo get_template_directory_uri(); ?>/assets/images/rating.webp" height="20px"  class="mx-auto d-flex" alt="ambulance" />
    <div class="text-view">
        <? echo the_content(); ?>
    </div>
    <div class="image-view">
        <? echo the_post_thumbnail(); ?>
    </div>
    <h6><? echo $name; ?></h6>
</div>