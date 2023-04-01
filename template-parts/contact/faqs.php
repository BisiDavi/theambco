<div class="faqs py-5 container">
    <h3 class="text-center my-5">FAQ</h3>
    <?
        $faqArgs = array(
            'post_tye' => 'post',
            'cat' => 65,
            'order' => 'ASC',
            'orderby' => 'date'
        );

        $faqPost = new WP_Query($faqArgs);
        if($faqPost->have_posts()){
            while($faqPost->have_posts()){
                $faqPost->the_post();
                $faqHeader= get_post_field("question",$faqPost->post->ID);
                get_template_part("template-parts/contact/faq", "faq"); 
            }
        }
    ?>
</div>