<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="events_block">
    <?foreach($arResult['ITEMS'] as $arItem){?>
        <a target="_blank" href="<?=$arItem['PROPERTIES']['link']['VALUE']?>">
            <img src="<?=$arItem['img']['src']?>" alt="">
            <span class="date"><?=$arItem['PREVIEW_TEXT']?></span>
            <span class="place"><?=$arItem['NAME']?></span>
        </a>
    <?}?>
</div>