<?php

/**
 * @package Wordpress
 * @subpackage Team
 * @since 1.0
 */

?>

<? 
    $role = get_post_field("role",$post->ID);
?>

<div class="teammate col-12 col-md-4">
    <div class="image-view">
        <? echo the_post_thumbnail(); ?>
    </div>
    <div class="text">
        <h6><? echo the_title(); ?></h6>
        <p><? echo $role; ?></p>
    </div>
</div>