<? 
    $date = date_create($post->post_date); 
    $publishedOn = date_format($date, 'l, F Y'); 
    $post_excerpt = wp_trim_words($post->post_excerpt, 40, '...'); 
?>

<a class="blog-view swiper-slide" href="/<? echo $post->post_name; ?>">
    <? echo the_post_thumbnail(); ?>
    <div class="blog-text-content">
        <h6> <? echo the_title(); ?> </h6>
        <p><? echo $post_excerpt; ?></p>
    </div>
</a>