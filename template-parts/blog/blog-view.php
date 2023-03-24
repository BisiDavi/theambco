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
debug_to_console($post_tags, 'post_tag');
?>

<div class="p-5 blog_view_page">
    <h2 class="text-center font-bold"> <? echo the_title();  ?> </h2>
    <div class="container-fluid d-flex mx-auto">
        <div class="col-9">
            <div class="blog_image_view">
                <? echo the_post_thumbnail(); ?>
            </div>
            <div class="blog_text-content my-4">
                <? echo the_content(); ?>
            </div>
        </div>
        <div class="col-3">
            <div class="tags gap-4">
                <h6>Post Tags</h6>
                <div class="post_tags align-items-center justify-content-between  d-flex">
                    <? 
                        foreach ($post_tags as $post_tag) { 
                            get_template_part('template-parts/blog/post-tag', 'post-tag', array('post_tag' => $post_tag));
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
