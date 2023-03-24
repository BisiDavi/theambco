<div class="medium-post container-fluid">
    <h3>Our Blog Post </h3>
    <div class="grid-post">
        <? 
            // fetch blog sub pages
            $pageArgs = array(
                'post_type' => 'post',
                'cat' => 16,
                'category_name' => 'blog'
            );

            $parentPage = new WP_Query($pageArgs);

            if($parentPage->have_posts()){
                $pinned_post_title = get_post_field('post_title',240);        
                $pinned_post_link = get_post_field('post_name',240);        
                $pinned_post_date = get_post_field('post_date',240);        
                $pinned_post_thumbnail_url = get_the_post_thumbnail_url(240, 'post-thumbnail');        
                if($pinned_post_title){
                    get_template_part('template-parts/blog/pinned_medium-post_item', 'pinned_medium-post_item', array(
                        'post_title' =>$pinned_post_title,
                        'post_date' => $pinned_post_date,
                        'post_thumbnail_url' => $pinned_post_thumbnail_url,
                        'post_link' => $pinned_post_link
                    ));
                }
                
                while($parentPage->have_posts()){
                    $parentPage->the_post();
                    if($parentPage->post->ID !== 240){
                        get_template_part('template-parts/blog/medium-post_item', 'medium-post_item');
                    }
                }
            }
        ?>
    </div>
</div>