<div class="our_team mb-5">
    <h3 class="text-center mx-auto my-5">Meet our Team</h3>
    <div class="container mx-auto d-flex flex-md-row flex-column">
        <? 
            $teamArgs = array(
                'post_type' => 'post',
                'cat' => 64,
                'order' => 'ASC',
                'orderby' => 'date'
            );
            $teamPosts = new WP_Query($teamArgs);
            if($teamPosts->have_posts()){
                while($teamPosts->have_posts()){
                    $teamPosts->the_post();
                    get_template_part('template-parts/about-us/team','team');
                }
            }
        ?>
    </div>
</div>