<? $post_title = get_post_field('post_title',133);?>

<div class="top-banner d-flex align-item-center">
    <div class="container emergency_line d-flex">
        <div class="text-center">
            <? echo $post_title; ?>
            <a href="tel:<? echo the_field('phone_number_1',133); ?>"><? echo the_field('phone_number_1',133); ?></a>
            <a href="tel:<? echo the_field('phone_number_2',133); ?>"><? echo the_field('phone_number_2',133); ?></a>
            <a href="tel:<? echo the_field('phone_number_3',133); ?>"><? echo the_field('phone_number_3',133); ?></a>
        </div>
    </div>
</div>