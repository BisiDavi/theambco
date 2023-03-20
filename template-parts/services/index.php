<div class="our-services container py-5">
<? $postArgs = array(
        'post_type' => 'post', 
        'cat' => 15, 
    );
    $servicesPost = new WP_Query($postArgs);
    $index = 0;
    if ($servicesPost->have_posts()) {
        while ($servicesPost->have_posts()) {
            $servicesPost->the_post();
            ++$index;
            get_template_part('template-parts/services/service', 'service', array('index' => $index));
        }
    } 
    ?> 
</div>