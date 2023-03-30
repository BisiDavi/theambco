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
    <div class="text-view">
        <? echo the_content(); ?>
    </div>
    <h4><? echo $name; ?></h4>
</div>