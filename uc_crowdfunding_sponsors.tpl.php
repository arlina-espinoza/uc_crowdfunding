<?php 
$length = ( $length && $length <= count($sponsors) ) ? $length : count($sponsors);
if ($sort_asc) {
    $sponsors = array_reverse($sponsors);
}
?>
<div class="crowdfunding-sponsors"> 
    <?php for ($i = 0; $i < $length; $i++){ ?>
        <div>
            <?php print $sponsors[$i]->user_pic; ?>
            <div class='crowdfunding-sponsors-name'><?php print "{$sponsors[$i]->name} - <span class='crowdfunding-sponsors-donation'>{$sponsors[$i]->donation}</span>"; ?></div>
            <div class='crowdfunding-sponsors-city'><?php print "{$sponsors[$i]->city}"; ?></div>
            <div class='crowdfunding-sponsors-message'><?php print "{$sponsors[$i]->message}"; ?></div>
        </div>
    <?php } ?>
    <?php if ($length == 0): ?>
        <div class='crowdfunding-sponsors-message'><?php print t('Be the first to participate!'); ?></div>
    <?php endif;?>
</div>