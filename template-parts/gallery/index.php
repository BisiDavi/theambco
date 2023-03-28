<? 
     $galleryPostArgs = array(
        'post_type' => 'post', 
        'cat' => 62, 
        'paged' => get_query_var('paged'),
        'order' => 'ASC',
        'orderby' => 'date',
        'posts_per_page' => 12
    );
    $galleryPost = new WP_Query($galleryPostArgs);
?>

<div class="gallery-view container-fluid grid">
    <?
        if($galleryPost->have_posts()){
            while($galleryPost->have_posts()){
                $galleryPost->the_post();
                ?>
                <a class="gallery-view-item" href="<?echo get_the_post_thumbnail_url($post->ID,'post_thumbnail'); ?>" data-lightbox="example-set">
                    <? echo the_post_thumbnail(); ?>
                </a>
           <? }
        }
    ?>
</div>
<div class="pagination">
    <?php 
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $galleryPost->max_num_pages,
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