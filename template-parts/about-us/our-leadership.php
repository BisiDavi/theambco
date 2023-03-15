<?php

/**
 * @package Wordpress
 * @subpackage Our Leadership
 * @since 1.0
 */

?>

<div class="our-leadership">
    <div class="container mx-auto d-flex justify-content-between py-5 py-lg-0 m-3">
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