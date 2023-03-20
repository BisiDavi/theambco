<?php

/**
 * @package Wordpress
 * @subpackage Contact us section
 * @since 1.0
 */

?>

<? $contact_post = get_post_field('post_content',12);?>
<? $content_url = get_the_post_thumbnail_url(37, 'post-thumbnail');?>


<div class="contact-us d-flex mt-5 align-items-center">
    <div class="home_contact_us col-6">
        <img src="<? echo $content_url; ?>" alt="contact us" class="w-100" />
    </div>
    <div class="col-6">
        <h4>Contact Us</h4>
        <? echo $contact_post; ?>
    </div>
</div>