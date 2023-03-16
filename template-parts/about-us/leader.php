<?php

/**
 * @package Wordpress
 * @subpackage Leader
 * @since 1.0
 */

?>

<? $content_post = get_post_field('post_content',$post->ID);?>

<div class="col-4">
    <div class="leader">
        <div class="image-view">
            <? echo the_post_thumbnail(); ?>
        </div>
        <div class="text">
            <? echo the_title(); ?>
        </div>
        <div class="role">
            <? the_field('position', $post->ID); ?>
        </div>
        <div class="leader-body">
            <? echo $content_post; ?>
        </div>
    </div>
</div>