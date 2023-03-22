<?php

/**
 * @package Wordpress
 * @subpackage Contact us section
 * @since 1.0
 */

?>

<? $post_title = get_post_field('post_title',40);?>
<? $content_post = get_post_field('post_content',40);?>
<? $content_url = get_the_post_thumbnail_url(37, 'post-thumbnail');?>


<div class="home_contact_us">
 <? echo $content_post; ?>
 <button class="contact_us d-flex mx-auto about_us_btn" href="/contact">
    Contact Us
 </button>
</div>
