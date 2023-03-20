<? $content_post = get_post_field('post_content',$post->ID);?>

<div class="service">
    <div class="col-6">
        <? echo the_post_thumbnail(); ?>
    </div>
    <div class="col-6">
    <? echo the_title(); ?>
    <? echo $content_post; ?>
    </div>
</div>