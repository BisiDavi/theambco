<? 
    $newletterPostArgs = array(
        'post_type' => 'post',
        'p' => 611
    );
    
    $newletterPost = new WP_Query($newletterPostArgs);

    if($newletterPost->have_posts()){ 
        while($newletterPost->have_posts()){
            $newletterPost->the_post(); ?>
            .n
       <? }
    }
?>