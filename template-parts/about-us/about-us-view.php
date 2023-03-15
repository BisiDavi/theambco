<?php

/**
 * @package Wordpress
 * @subpackage About us view section
 * @since 1.0
 */

?>

<? $post_title = get_post_field('post_title',93);?>
<? $content_post = get_post_field('post_content',93);?>


<div class="about-us-view">
    <h3><? $post_title ?></h3>
    <p> <? $content_post ?> </p>
</div>