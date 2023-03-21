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

<form class="contact-form mx-5 my-4">

    <? 
        $json = file_get_contents(__DIR__ . '/contact-form.json');
        $jsonData = json_decode($json, true);

        foreach ($jsonData as $jsonArray) { ?>
            <div class="form-group row">
                <?
                    foreach ($jsonArray as $formElementData) {
                        // debug_to_console($formElementData['type'],'$formElementData->type');
                        if($formElementData['type'] === 'input'){
                            get_template_part('template-parts/form/input', 'input', array('input' => $formElementData));
                        }else if($formElementData['type'] === 'textarea'){
                            get_template_part('template-parts/form/textarea', 'input', array('input' => $formElementData));
                        }else if($formElementData['type'] === 'select'){
                            get_template_part('template-parts/form/select', 'input', array('input' => $formElementData));
                        }
                    }
                ?>
            </div>
    <? } ?>
    <button class="submit round-btn mx-auto mt-4">Submit</button>
</form>