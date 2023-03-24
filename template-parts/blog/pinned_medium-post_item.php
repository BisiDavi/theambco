<? 
 $post_title = $args['post_title'];   
 $post_date = $args['post_date'];   
 $post_thumbnail = $args['post_thumbnail_url'];  
 $post_link = $args['post_link'];  
 $date = date_create($post_date);
 $publishedOn = date_format($date, 'l, F Y'); 
?>

<a class="post-view" href="/<? echo $post_link; ?>">
    <img src="<? echo $post_thumbnail; ?>" alt="<? echo $post_title; ?>"  />   
    <div class="post-text-content">
        <h6> <? echo $post_title; ?> </h6>
        <p>Posted on: <? echo $publishedOn; ?> </p>
    </div>
</a>