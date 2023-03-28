<?php

/**
 * @package Wordpress
 * @subpackage Our Leadership
 * @since 1.0
 */

?>

<div class="our-leadership py-5 bg-white">
    <h3 class="text-center mb-5">OUR LEADERSHIP</h3>
    <div class="container mx-auto d-flex flex-md-row  flex-column justify-content-around justify-space-md-betwe gap-lg-5 py-lg-5 px-md-0 p-4">
        <? $postArgs = array(
            'post_type' => 'post', 
            'cat' => 13, 
            'order' => 'ASC',
            'orderby' => 'date'
        );
            $leadershipPost = new WP_Query($postArgs);
            if ($leadershipPost->have_posts()) {
                while ($leadershipPost->have_posts()) {
                    $leadershipPost->the_post();
                    get_template_part('template-parts/about-us/leader', 'leader');
                }
            } 
        ?>
    </div>
</div>