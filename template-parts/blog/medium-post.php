<div class="medium-post container-fluid">
    <h3>Our Blog Post </h3>
    <div class="grid-post">
        <? 
            // fetch blog sub pages
            $pageArgs = array(
                'post_type' => 'post',
                'cat' => 16,
                'paged' => get_query_var('paged'),
                'nopaging' => false,
                'category_name' => 'blog',
                'ignore_sticky_posts' => 1,  
                'posts_per_page' => 11,
                'post__not_in' => array(240)
            );

            $parentPage = new WP_Query($pageArgs);
            
            if($parentPage->have_posts()){
                $pinned_post_title = get_post_field('post_title',240);        
                $pinned_post_link = get_post_field('post_name',240);        
                $pinned_post_date = get_post_field('post_date',240);   
                $post_thumbnail_url = get_the_post_thumbnail_url(240);  
              
                if($pinned_post_title && $parentPage->query["paged"] === 0){
                    get_template_part('template-parts/blog/pinned_medium-post_item', 'pinned_medium-post_item',
                array('post_title' => $pinned_post_title, 'post_date' => $pinned_post_date, 'post_thumbnail_url' =>$post_thumbnail_url ,'post_link' =>$pinned_post_link));
                } 

                if($parentPage->query["paged"] !== 0){
                    $parentPage->set('posts_per_page',12);
                    $parentPage->query($parentPage->query_vars);
                }

                while($parentPage->have_posts()){
                    $parentPage->the_post();
                        get_template_part('template-parts/blog/medium-post_item', 'medium-post_item');
                
                    }
            } 
            wp_reset_postdata();
        ?>
    </div>
    <div class="pagination">
        <?php 
            echo paginate_links( array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $parentPage->max_num_pages,
                'current'      => max( 1, get_query_var( 'paged' ) ),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 2,
                'mid_size'     => 1,
                'prev_next'    => true,
                'prev_text'    => sprintf( '<i></i> %1$s', __( '<<', 'text-domain' ) ),
                'next_text'    => sprintf( '%1$s <i></i>', __( '>>', 'text-domain' ) ),
                'add_args'     => false,
                'add_fragment' => '',
            ) );
        ?>
    </div>
</div>