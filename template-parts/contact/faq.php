<?
    $question = get_post_field("question", $post->ID);
    $answer = get_post_field("answer", $post->ID);
    $faqHeaderSlug = $args["faqHeaderSlug"];
?>

<div class="faq-item">
    <div class="faq-header" data-faqslug="<? echo $faqHeaderSlug; ?>">
        <h6 class="title"><? echo $question; ?></h6>
        <span>˅</span>
    </div>
    <div class="faq-body" id="faqBody">
        <? echo $answer; ?>
    </div>
</div>