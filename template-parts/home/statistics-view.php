<?
    $calls_received = get_post_field('calls_received', $post->ID);
    $live_saved = get_post_field('live_saved', $post->ID);
    $avg_resp_time = get_post_field('avg_resp_time', $post->ID);
    $ambulances = get_post_field('ambulances', $post->ID);
?>

<div class="statistics container mx-auto">
    <div class="col-12 d-flex text-align-center">
        <div class="col-3 count" data-default="0" data-value="<? echo $calls_received ?> ">
            <? echo $calls_received ?> 
            <h6>Calls Received</h6>
        </div>
        <div class="col-3 count"  data-default="0"  data-value="<? echo $live_saved ?>">
            <? echo $live_saved ?>
            <h6>Lives Saved</h6>
        </div>
        <div class="col-3 count"  data-default="0"  data-value="<? echo $avg_resp_time; ?>">
            <? echo $avg_resp_time; ?>
            <h6>Average Response Time</h6>
        </div>
        <div class="col-3 count"  data-default="0"  data-value="<? echo $ambulances; ?>">
            <? echo $ambulances; ?>
            <h6>Ambulances</h6>
        </div>
    </div>
</div>