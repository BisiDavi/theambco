<?
    $postArgs = array(
        'post_type' => 'post', 
        'cat' => 15, 
        'order' => 'ASC',
        'orderby' => 'date',
        'posts_per_page' => 5
    );
    $servicesPost = new WP_Query($postArgs);
?>

<div class="services-view py-lg-5 d-flex mb-5">
    <div class="container d-flex flex-column flex-lg-row">
        <div class="col-lg-6 order-2 order-lg-1 col-12 pb-5 pb-lg-0">
            <h4>Our Services.</h4>
            <h6>We Provide Topnotch Services</h6>
            <p>
            The Ambulance Company is proud to offer our services all throughout the country of Nigeria. For us, nothing is more important than increasing access to healthcare for the thousands of Nigerians out there who struggle each and every day to access the care that they deserve. 
            </p>
            <a href="/services" class="round-btn">View all services →</a>
        </div>
        <div class="col-lg-6 col-12 order-1 order-lg-2  right">
        <?
                if ($servicesPost->have_posts()) {
                    $index = 0;
                    while ($servicesPost->have_posts()) {
                        ++$index;
                        $servicesPost->the_post();
                        $lastCard = $index === 5 ? "last" : ""
                        ?>
                        <div class="service_card <? echo $lastCard; ?>">
                            <? echo the_title(); ?>
                        </div>    
                <? }
                } 
        ?>
        </div>
    </div>
</div>