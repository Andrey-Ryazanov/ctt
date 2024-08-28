<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul>
    <?if (!empty($arResult)):
        foreach($arResult as $key => $arItem){?>
            <li>
                <a <?if($key == 0){?>target="_blank"<?}?> href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
            </li>
        <?}?>
    <?endif?>
</ul>