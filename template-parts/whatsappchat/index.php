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
    $chatDetailsArgs = array(
        'post_type' => 'post',
        'cat' => 66,
    );
    $chatDetails = new WP_Query($chatDetailsArgs);
?>

<? if($chatDetails->have_posts()){
    $chatDetail = $chatDetails->posts[0];
    $title = get_post_field('title', $chatDetail->ID);
    $description = get_post_field('description', $chatDetail->ID);
    $footer_text = get_post_field('footer_text', $chatDetail->ID);
?>
    <div class="whatsapp-view">
        <div class="whatsapp_icon_widget animate__animated" id="whatsappWidget">
            <div class="top">
                <h3><? echo $title; ?></h3>
                <p><? echo $description; ?></p>
            </div>
            <div class="content">
                <? get_template_part('template-parts/whatsappchat/customer-care-view','customer-care'); ?>
            </div>
            <div class="footer"><? echo $footer_text; ?></div>
        </div>
        <button class="whatsapp_icon_button" id="whatsappBtn">
            <? include get_theme_file_path("/assets/images/whatsapp.svg"); ?>
        </button>
    </div>
<? } ?>