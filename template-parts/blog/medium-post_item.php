<? $date = date_create($post->post_date); ?>
<? $publishedOn = date_format($date, 'l, F Y'); ?>

<a class="post-view" href="<? echo $post->post_name; ?>">
    <? echo the_post_thumbnail(); ?>
    <h6> <? echo the_title(); ?> </h6>
    <p>Posted on: <? echo $publishedOn; ?> </p>
</a>