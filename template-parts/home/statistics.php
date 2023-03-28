<div class="statistics-view">
    <? 
        $postArgs = array(
            'post_type' => 'post', 
            'cat' => 61, 
        );
        $statisticsPost = new WP_Query($postArgs);
        if($statisticsPost->have_posts()){
            while($statisticsPost->have_posts()){
                $statisticsPost->the_post();
                get_template_part('template-parts/home/statistics-view', 'statistics-view');
            }
        }
        wp_reset_postdata();
    ?>
</div>