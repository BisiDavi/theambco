<? require __DIR__ . '../../../utils/toSlug.php'; ?>

<div class="medium-post container-fluid">
    <h3>Our Blog Post </h3>
    <div class="grid-post">
        <? 
            // fetch blog post from medium
            $getMediumPost = wp_remote_get('https://api.rss2json.com/v1/api.json?rss_url=https://theambulancecompany.medium.com/feed');
            $mediumPost = wp_remote_retrieve_body($getMediumPost);
            $mediumPostData = json_decode($mediumPost);
            $mediumPosts = $mediumPostData -> items;


            foreach ($mediumPosts as $key => $data) {
                $postSlug = slugify($data->title); 
                get_template_part('template-parts/blog/medium-post_item', 'medium-post_item', array('post' => $data, 'slug' => $postSlug));
            }
        ?>
    </div>
</div>