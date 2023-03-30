<?php

/**
 * @package Wordpress
 * @subpackage Testimonial
 * @since 1.0
 */

?>

<?
    $name = get_post_field('name', $post->ID);
?>

<div class="testimonial col-2">
    <img src="<? echo get_template_directory_uri(); ?>/assets/images/rating.webp" height="20px"  class="mx-auto d-flex" alt="ambulance" />
    <div class="text-view">
        <? echo the_content(); ?>
    </div>
    <h6><? echo $name; ?></h6>
</div>