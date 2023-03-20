<? $post = $args['post']; ?>

<div class="post-view">
    <img src="<? echo $post->thumbnail; ?>" alt="<? echo $post->title; ?>" />
    <h6> <? echo $post->title; ?> </h6>
</div>