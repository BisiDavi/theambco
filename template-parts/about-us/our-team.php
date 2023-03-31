<div class="our_team">
    <h3>Meet our Team</h3>
    <div class="container mx-auto d-flex flex-md-row flex-column">
        <? 
            $teamArgs = array(
                'post_type' => 'post',
                'cat' => 64
            );
            $teamPosts = new WP_Query($teamArgs);
            if($teamPosts->have_posts()){
                while($teamPosts->have_posts()){
                    $teamPosts->the_post();
                    get_template_part('template-parts/about-us/our-team','team');
                }
            }
        ?>
    </div>
</div>