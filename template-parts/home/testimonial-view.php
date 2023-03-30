<?php

/**
 * @package Wordpress
 * @subpackage Testimonial-View
 * @since 1.0
 */

?>


<div class="testimonial_view container-fluid py-5">
    <h4 class="text-center">Testimonials</h4>
    <div class="d-flex flex-column align-items-start mt-4 testimonial_view_group">
        <div class="swiper testimonialSlider container">
            <div class="swiper-wrapper">
                <?
                    $testimonialArgs = array(
                        'post_type' => 'post',
                        'cat' => 63,
                        'order' => 'ASC',
                        'orderby' => 'date'
                    );

                    $testimonialPost = new WP_Query($testimonialArgs);
                    if($testimonialPost->have_posts()){
                        while($testimonialPost->have_posts()){
                            $testimonialPost->the_post();
                            get_template_part('template-parts/home/testimonial','testimonial');
                        }
                    }
                ?>
            </div>
        </div>
        <div class="paginate-slider">
            <div class="swiper-pagination testimonialPagination"></div>
        </div>
        <div class="swiper-button-prev testimonialButtonPrev"></div>
        <div class="swiper-button-next testimonialButtonNext"></div>
    </div>
</div>