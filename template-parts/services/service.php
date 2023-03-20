<?
 $content_post = get_post_field('post_content',$post->ID);
 $evenOrOdd =  $args["index"] % 2;
 $imageOrder = $evenOrOdd === 0 ? "order-2" : "order-1";
 $textOrder = $evenOrOdd === 1 ? "order-2" : "order-1";
?>

<div class="service d-flex align-items-center justify-content-between my-5">
    <div class="col-6 <?php echo $imageOrder; ?> service_image">
        <? echo the_post_thumbnail(); ?>
    </div>
    <div class="col-6 <? echo $textOrder; ?>">
        <h4><? echo the_title(); ?></h4>
        <? echo $content_post; ?>
        <a class="round-btn" href="/contact">Contact us &gt;</a>
    </div>
</div>