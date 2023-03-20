<?php

/**
 * @package Wordpress
 * @subpackage Contact us section
 * @since 1.0
 */

?>

<? $contact_post = get_post_field('post_content',12);?>
<? $content_url = get_the_post_thumbnail_url(37, 'post-thumbnail');?>


<div class="page_contact-us d-flex mt-5 align-items-center pt-4">
    <div class="col-6 px-0 left"
    style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(251, 7, 7, 0.33)), url(<? echo $content_url;?>);
      background-size:cover;">
    </div>
    <div class="col-6">
        <h4>Contact Us</h4>
        <? echo $contact_post; ?>
    </div>
</div>