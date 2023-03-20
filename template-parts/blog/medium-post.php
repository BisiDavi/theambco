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
    // fetch blog post from medium
    $getMediumPost = wp_remote_get('https://api.rss2json.com/v1/api.json?rss_url=https://theambulancecompany.medium.com/feed');
    $mediumPost = wp_remote_retrieve_body($getMediumPost);
    $mediumPostJson = json_decode($mediumPost);

    debug_to_console($mediumPostJson, 'mediumPost')
?>