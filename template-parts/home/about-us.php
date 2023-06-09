<?php

/**
 * @package Wordpress
 * @subpackage About us section
 * @since 1.0
 */

?>

<? $post_title = get_post_field('post_title',32);?>
<? $content_post = get_post_field('post_content',32);?>
<? $content_url = get_the_post_thumbnail_url(32, 'post-thumbnail');?>

<div class="about-us py-lg-5">
    <div class="d-flex flex-column flex-lg-row justify-content-between py-5 align-items-center">
        <div class="col-lg-6 col-12 px-0 image-view">
            <img class="about_img" src="<? echo $content_url; ?>" />
            <div class="overlay"></div>
        </div>
        <div id="about_us_content" class="col-lg-6 col-12 px-4">
            <h3><? echo $post_title ?></h3>
            <? echo $content_post ?>
            <div class="about_btn_group d-flex align-items-center justify-content-between">
                <a class="white_green" href="/about-us">
                    About us
                </a>
                <a id="read_more_about_us" class="read_more_link">Read More</a>
            </div>
        </div>
    </div>
</div>