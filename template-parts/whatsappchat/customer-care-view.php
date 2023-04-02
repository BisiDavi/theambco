<? 
    $customerCarePostArgs = array(
    'post_type' => 'post',
    'cat' => 67,
    );
    
    $customerCarePost = new WP_Query($customerCarePostArgs);

    if($customerCarePost->have_posts()){
        while($customerCarePost->have_posts()){
            $customerCarePost->the_post();
            get_template_part('template-parts/whatsappchat/customer-care','customer-care');
        }
    }
?>