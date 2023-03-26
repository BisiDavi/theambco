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
                'ignore_sticky_posts' => false,  
                'posts_per_page' => 12 
            );

            $parentPage = new WP_Query($pageArgs);

            if($parentPage->have_posts()){
                $pinned_post_title = get_post_field('post_title',240);        
                $pinned_post_link = get_post_field('post_name',240);        
                $pinned_post_date = get_post_field('post_date',240);        
                $pinned_post_thumbnail_url = get_the_post_thumbnail_url(240, 'post-thumbnail');        
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
                'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
                'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
                'add_args'     => false,
                'add_fragment' => '',
            ) );
        ?>
    </div>
</div>