<div class="statistics-view">
    <? 
        $postArgs = array(
            'post_type' => 'post', 
            'cat' => 61, 
        );
        $statisticsPost = new WP_Query($postArgs);
        if($statisticsPost->have_posts()){
            while($statisticsPost->have_posts()){
                $statisticsPost->the_post();
                get_template_part('template-parts/home/statistics-view', 'statistics-view');
            }
        }
        wp_reset_postdata();
        
        function debug_to_console($data, $context = 'Debug in Console') {

            // Buffering to solve problems frameworks, like header() in this and not a solid return.
            ob_start();
        
            $output  = 'console.info(\'' . $context . ':\');';
            $output .= 'console.log(' . json_encode($data) . ');';
            $output  = sprintf('<script>%s</script>', $output);
        
            echo $output;
        }
    ?>
</div>