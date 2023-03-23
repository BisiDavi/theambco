<div class="container d-flex py-5 blog_view_page">
    <div class="col-12">
        <h2 class="text-center font-bold"> <? echo the_title();  ?> </h2>
        <div class="blog_image_view">
            <? echo the_post_thumbnail(); ?>
        </div>
        <div class="blog_text-content my-4">
            <? echo the_content(); ?>
        </div>
    </div>
</div>
