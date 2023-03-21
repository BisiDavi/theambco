<? $post_title = get_post_field('post_title',133);?>

<div class="top-banner d-flex">
    <div class="container emergency_line d-flex">
        <div class="text-center d-flex align-items-center gap-4">
            <img src="<? echo get_template_directory_uri(); ?>/assets/images/ambulance.svg" width="20px" height="20px"  class="mx-2" alt="ambulance" />
            <? echo $post_title; ?>
            <a href="tel:<? echo the_field('phone_number_1',133); ?>" class="mx-1 ml-3"><? echo the_field('phone_number_1',133); ?></a>,
            <a href="tel:<? echo the_field('phone_number_2',133); ?>" class="mx-1"><? echo the_field('phone_number_2',133); ?></a>,
            <a href="tel:<? echo the_field('phone_number_3',133); ?>" class="mx-1"><? echo the_field('phone_number_3',133); ?></a>
        </div>
    </div>
</div>