<!-- <? require __DIR__ . '../../../utils/toSlug.php'; ?> -->

<div class="our-services container py-5">
    <? $postArgs = array(
            'post_type' => 'post', 
            'cat' => 15, 
            'order' => 'ASC',
            'orderby' => 'date',
        );
        $servicesPost = new WP_Query($postArgs);
        
        $index = 0;
        if ($servicesPost->have_posts()) {
            while ($servicesPost->have_posts()) {
                $servicesPost->the_post();
                $post_slug = toSlugify($servicesPost->post->post_title);
                ++$index;
                get_template_part('template-parts/services/service', 'service', array('index' => $index, 'post_slug' => $post_slug));
            }
        } 
    ?> 
</div>