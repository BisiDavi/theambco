
<? $post = $args['post']; ?>
<? $date = date_create($post->pubDate); ?>
<? $publishedOn = date_format($date,"l, F Y"); ?>
<? $postSlug = $args['slug']; ?>

<a class="post-view" href="/blog/<? echo $postSlug;  ?>">
    <img src="<? echo $post->thumbnail; ?>" alt="<? echo $post->title; ?>" />
    <h6> <? echo $post->title; ?> </h6>
    <p>Posted on: <? echo $publishedOn; ?> </p>
</a>