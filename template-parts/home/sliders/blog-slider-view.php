<? 
    $date = date_create($post->post_date); 
    $publishedOn = date_format($date, 'l, F Y'); 
    $post_excerpt = wp_trim_words($post->post_excerpt, 40, '...'); 
    $post_title = wp_trim_words($post->post_title, 10, '...'); 
?>

<a class="blog-view" href="/<? echo $post->post_name; ?>">
    <? echo the_post_thumbnail("blog-thumbnail"); ?>
    <div class="blog-text-content">
        <h6> <? echo $post_title; ?> </h6>
        <p><? echo $post_excerpt; ?></p>
    </div>
</a>