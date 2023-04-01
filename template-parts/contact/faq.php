<?
    $question = get_post_field("question", $post->ID);
    $answer = get_post_field("answer", $post->ID);
?>

<div class="faq-item">
    <div class="faq-header">
        <h6 class="title"><? echo $question; ?></h6>
        <span>˅</span>
    </div>
    <div class="faq-body animate__animated">
        <? echo $answer; ?>
    </div>
</div>