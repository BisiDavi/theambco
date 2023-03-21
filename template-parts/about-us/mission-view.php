<?php

/**
 * @package Wordpress
 * @subpackage Our mission view section
 * @since 1.0
 */

?>

<? $post_title = get_post_field('post_title',95);?>
<? $content_post = get_post_field('post_content',95);?>


<div class="our-mission-view col-lg-6 col-12 p-lg-5 p-4">
    <h3 class="text-center"><? echo $post_title; ?></h3>
    <p> <? echo $content_post; ?> </p>
</div>