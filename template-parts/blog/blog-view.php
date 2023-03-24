<? 
function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}
$post_tags = get_the_tags($post->ID);
$post_date = date_create($post->post_date);
$publishedOn = date_format($post_date, 'l, F Y');
debug_to_console($post, 'post');
?>

<div class="p-5 blog_view_page">
    <h2 class="text-center font-bold"> <? echo the_title();  ?> </h2>
    <div class="container-fluid d-flex mx-auto">
        <div class="col-8">
            <div class="blog_image_view">
                <? echo the_post_thumbnail(); ?>
            </div>
            <div class="blog_text-content my-4">
                <? echo the_content(); ?>
            </div>
        </div>
        <div class="col-4 tags py-5">
            <div class="author d-flex align-items-center">
                <h6>Posted by: <? echo get_the_author(); ?></h6>
            </div>
            <h6 class="posted_on">Date: <? echo $publishedOn; ?></h6>
            <?if ($post_tags){ ?>
                <div class="post_tag d-flex flex-wrap">
                    <h6>Post Tags</h6>
                    <div class="align-items-center flex-wrap justify-content-start gap-4 d-flex">
                        <? 
                            foreach ($post_tags as $post_tag) { 
                                get_template_part('template-parts/blog/post-tag', 'post-tag', array('post_tag' => $post_tag));
                            }
                        ?>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</div>
