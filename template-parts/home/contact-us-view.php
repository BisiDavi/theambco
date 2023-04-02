<?php

/**
 * @package Wordpress
 * @subpackage Contact us view
 * @since 1.0
 */

?>

<? $post_title = get_post_field('post_title',84);?>
<? $content_post = get_post_field('post_content',84);?>


<div class="container-fluid contact-us-view">
    <div class="container py-4">
        <h3 class="text-center my-4"><? echo $post_title; ?></h3>
        <div class="text-content">
            <? echo $content_post; ?>
        </div>
        <a class="button white_green mx-auto mt-5" href="/contact">Contact us</a>
    </div>
</div>