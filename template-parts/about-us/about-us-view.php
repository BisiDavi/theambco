<?php

/**
 * @package Wordpress
 * @subpackage About us view section
 * @since 1.0
 */

?>

<? $post_title = get_post_field('post_title',93);?>
<? $content_post = get_post_field('post_content',93);?>


<div class="about-us-view col-lg-6 col-12 p-lg-5 p-4">
    <h3 class="text-center"><? echo $post_title; ?></h3>
    <p> <? echo $content_post; ?> </p>
</div>