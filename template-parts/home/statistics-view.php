<?
    $calls_received = get_post_field('calls_received', $post->ID);
    $live_saved = get_post_field('live_saved', $post->ID);
    $avg_resp_time = get_post_field('avg_resp_time', $post->ID);
    $ambulances = get_post_field('ambulances', $post->ID);
?>

<div class="statistics_wrapper bg-white">
    <div class="statistics container mx-auto">
        <div class="col-12 d-flex text-align-center">
            <div class="col-md-3 col-6 count" data-default="0" data-value="<? echo $calls_received ?> ">
            <h4 id="statsCount1"><? echo $calls_received ?></h4> 
                <h6>Calls Received</h6>
            </div>
            <div class="col-md-3 col-6 count"  data-default="0"  data-value="<? echo $live_saved ?>">
                <h4 id="statsCount2"><? echo $live_saved ?></h4>    
                <h6>Lives Saved</h6>
            </div>
            <div class="col-md-3 col-6 count"  data-default="0"  data-value="<? echo $avg_resp_time; ?>">
                <h4 id="statsCount3"><? echo $avg_resp_time; ?></h4>   
                <h6>Average Response Time</h6>
            </div>
            <div class="col-md-3 col-6 count"  data-default="0"  data-value="<? echo $ambulances; ?>">
                <h4 id="statsCount4"><? echo $ambulances; ?></h4>   
                <h6>Ambulances</h6>
            </div>
        </div>
    </div>
</div>