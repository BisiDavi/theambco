<? 
    $contact_form_json_data = file_get_contents('json/contact-form.json');
    $contact_form_json = json_decode($contact_form_json_data, true);
    print_r($contact_form_json);
?>


<form class="contact-form">

</form>