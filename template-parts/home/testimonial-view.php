<?php

/**
 * @package Wordpress
 * @subpackage Testimonial-View
 * @since 1.0
 */

?>

<?
    $testimonialArgs = array(
        'post_type' => 'post',
        'cat' => 63,
        'order' => 'ASC',
        'orderby' => 'date'
    );
    $testimonialPost = new WP_Query($testimonialArgs);
?>

<div class="testimonial_view container-fluid py-5">
    <h4 class="text-center">Testimonials</h4>
    <div class="d-flex align-items-start">
        <?
            if($testimonialPost->have_posts()){
                while($testimonialPost->have_posts()){
                    $testimonialPost->the_post();
                    get_template_part('template-parts/home/testimonial','testimonial');
                }
            }
        ?>
    </div>
</div>