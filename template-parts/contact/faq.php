<?
    $question = get_post_field("question", $post->ID);
    $answer = get_post_field("answer", $post->ID);
?>

<div class="faq-item">
    <div class="faq-header">
        <? echo $question; ?>
    </div>
    <div class="faq-body">
        <? echo $answer; ?>
    </div>
</div>