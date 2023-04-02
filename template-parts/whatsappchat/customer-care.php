<? 
    $customer_representative_name = get_post_field('customer_representative_name', $post->ID);
    $customer_care_phone = get_post_field('phone', $post->ID);
    $customer_care_icon_id = get_post_field('customer_care_icon', $post->ID);
    $customer_care_icon = wp_get_attachment_url($customer_care_icon_id);
    $_message = get_post_field('message', $post->ID);
    $message = urlencode($_message)
    // urlencode
?>
<a 
    class="customer-care" 
    href="https://wa.me/<? echo $customer_care_phone; ?>?text=<? echo $message; ?>" 
    target="_blank"
>
    <div class="icon">
        <img src="<? echo $customer_care_icon; ?>" alt="<? echo $customer_representative_name; ?>" />
        <? include get_theme_file_path("/assets/images/whatsapp.svg"); ?>
    </div>
    <div class="text-view">
        <h5><? echo $customer_representative_name; ?></h5>
    </div>
</a>