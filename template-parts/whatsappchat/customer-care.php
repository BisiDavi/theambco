<? 
    $customer_representative_name = get_post_field('customer_representative_name', $post->ID);
    $customer_care_icon = get_post_field('customer_care_icon', $post->ID);
    $customer_care_phone = get_post_field('phone', $post->ID);
    $message = get_post_field('message', $post->ID);
?>
<a 
    class="customer-care" 
    href="https://web.whatsapp.com/send?phone=<? echo $customer_care_phone; ?>&text=<? echo $message; ?>" 
    target="_blank"
>
    <div class="icon">
        <img src="<? echo $customer_care_icon; ?>" alt="<? echo $customer_representative_name; ?>" />
    </div>
    <div class="text-view">
        <h5><? echo $customer_representative_name; ?></h5>
    </div>
</a>