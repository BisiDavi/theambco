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
    $json = file_get_contents(__DIR__ . '/contact-form.json');
    $jsonData = json_decode($json, true);
    debug_to_console($jsonData);
?>


<form class="contact-form">

</form>