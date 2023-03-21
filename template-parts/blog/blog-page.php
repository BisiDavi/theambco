<? require __DIR__ . '../../../utils/toSlug.php'; ?>

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

<?
    global $wp;
    $page_url = home_url($wp->request);
    debug_to_console($page_url,'page_url');
?>
<? 
    // fetch blog post from medium
    $getMediumPost = wp_remote_get('https://api.rss2json.com/v1/api.json?rss_url=https://theambulancecompany.medium.com/feed');
    $mediumPost = wp_remote_retrieve_body($getMediumPost);
    $mediumPostData = json_decode($mediumPost);
    $mediumPosts = $mediumPostData->items;

    debug_to_console($mediumPosts,'mediumPosts');

    foreach ($mediumPosts as $key => $data) {
        $postSlug = slugify($data->title); 
    }
?>

<div class="container-fluid">

</div>
