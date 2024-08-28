<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--<pre><?/*print_r($_REQUEST)*/?></pre>-->

<div class="new_detail">
<div class="date"><?=$arResult['DISPLAY_ACTIVE_FROM']?></div>
    <?if($arResult['DETAIL_PICTURE']['SRC']){?>
        <div class="img"><img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>"></div>
    <?}?>
    <div class="text_new"><?=$arResult['DETAIL_TEXT']?></div>
</div>