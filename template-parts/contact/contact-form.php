<form class="contact-form mx-lg-5 m-0 my-lg-4 pb-5 pb-lg-0"
    action="https://formspree.io/f/xjvdabzn"
    method="POST"
>

    <? 
        $json = file_get_contents(__DIR__ . '/contact-form.json');
        $jsonData = json_decode($json, true);

        foreach ($jsonData as $jsonArray) { ?>
            <div class="form-group row">
                <?
                    foreach ($jsonArray as $formElementData) {
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
    <button class="submit round-btn mx-auto mt-4" type="submit">Submit</button>
</form>