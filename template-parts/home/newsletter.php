<? 
    $post_title = get_post_field('post_title', 32);
    $post_img_url = get_the_post_thumbnail_url(611, 'post-thumbnail');
    $post_content = get_post_field('post_content',611); 
?>

<div class="newsletter">
    <img src="<? echo $post_img_url; ?>" alt="<? echo $post_title; ?>" />
</div>