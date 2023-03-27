<?
    $calls_received = get_post_field('calls_received', $post->ID);
    $live_saved = get_post_field('live_saved', $post->ID);
    $avg_resp_time = get_post_field('avg_resp_time', $post->ID);
    $ambulances = get_post_field('ambulances', $post->ID);
?>

<div class="statistics container mx-auto">
    <div class="col-12 d-flex text-align-center">
        <div class="col-3">
            <? echo $calls_received ?>
        </div>
        <div class="col-3">
            <? echo $live_saved ?>
        </div>
        <div class="col-3">
            <? echo $avg_resp_time; ?>
        </div>
        <div class="col-3">
            <? echo $ambulances; ?>
        </div>
    </div>
</div>