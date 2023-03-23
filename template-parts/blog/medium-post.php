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
                while($parentPage->have_posts()){
                    $parentPage->the_post();
                    get_template_part('template-parts/blog/medium-post_item', 'medium-post_item');
                }
            }
        ?>
    </div>
</div>