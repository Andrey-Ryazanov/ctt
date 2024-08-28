<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <?if (!empty($arResult)){?>
<div class="title">
<?if (SITE_ID=='en') {?>
Useful links
<?} else {?>
Полезные ссылки
<?}?>
</div>
<ul>
<?foreach($arResult as $arItem){?>
            <li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
        <?}?>
    <div class="clearfix"></div>
</ul>
<?}?>
