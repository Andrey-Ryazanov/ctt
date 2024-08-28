<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="slider_footer">
    <?foreach($arResult['ITEMS'] as $arItem){?>
        <div>
            <a class="item" target="_blank" href="<?=$arItem['PROPERTIES']['link']['VALUE']?>">
                <img src="<?=$arItem['img']['src']?>" alt="">
            </a>
        </div>
    <?}?>
</div>