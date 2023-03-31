<div class="faqs">
    <h3>FAQ</h3>
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
                get_template_part("template-parts/contact/faq", "faq");
            }
        }
    ?>
</div>