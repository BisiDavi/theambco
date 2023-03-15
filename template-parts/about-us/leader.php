<?php

/**
 * @package Wordpress
 * @subpackage Leader
 * @since 1.0
 */

?>

<div class="col-4">
    <div class="leader">
        <div class="image-view">
            <? echo the_post_thumbnail(); ?>
        </div>
        <div class="text">
            <? echo the_title(); ?>
        </div>
    </div>
</div>