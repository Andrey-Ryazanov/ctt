<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul>
    <?if (!empty($arResult)):
        foreach($arResult as $arItem){?>
            <li><a target="_blank" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
        <?}?>
    <?endif?>
</ul>
