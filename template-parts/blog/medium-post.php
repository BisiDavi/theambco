<?
function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}
?>

<div class="medium-post container-fluid">
    <h3>Our Blog Post </h3>
    <div class="grid-post">
        <? 
            // fetch blog sub pages
            $pageArgs = array(
                'post_type' => 'page',
                'post_per_page' => -1,
                'post_parent' => 10, 
                'order' => 'DESC',
            );

            $parentPage = new WP_Query($pageArgs);

            if($parentPage->have_posts()){
                while($parentPage->have_posts()){
                    $parentPage->the_post();

                    debug_to_console($parentPage, 'parentPage');

                    get_template_part('template-parts/blog/medium-post_item', 'medium-post_item');
                }
            }
        ?>
    </div>
</div>