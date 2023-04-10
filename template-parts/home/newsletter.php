<? 
    $post_title = get_post_field('post_title', 32);
    $post_img_url = get_the_post_thumbnail_url(611, 'post-thumbnail');
    $post_content = get_post_field('post_content',611); 
?>

<div class="newsletter text-white d-flex mx-auto">
    <div class="overlay"></div>
    <img src="<? echo $post_img_url; ?>" alt="<? echo $post_title; ?>" />
    <div class="text-content w-100 d-flex py-4 order-2 order-lg-1 z-2 position-relative align-items-center mx-auto">
        <div class="col-lg-8 col-12">
            <? get_template_part('template-parts/form/newsletter-form', 'newsletter-form'); ?>
        </div>
        <div class="col-lg-4 col-12 order-1 order-lg-2">
            <h4><? echo $post_title; ?></h4>
            <p><? echo $post_content; ?></p>
        </div>
    </div>
</div>