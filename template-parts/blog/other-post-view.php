<? 
    $post_excerpt = wp_trim_words($post->post_excerpt, 18, '...'); 
    $post_title = wp_trim_words($post->post_title,8)
?>

<a class="other-post-view d-flex align-items-center my-3 gap-4" href="/<? echo $post->post_name; ?>">
    <div class="thumbnail mr-2">
        <? echo the_post_thumbnail(); ?>
    </div>
    <div class="text-content ml-2 py-4 pr-1">
        <h6><? echo $post_title;  ?></h6>
        <p><? echo $post_excerpt; ?></p>
    </div>
</a>