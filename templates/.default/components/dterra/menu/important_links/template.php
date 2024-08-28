<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>




<div class="important_links">
    <h3 class="hidden_date">
        <?if (SITE_ID=='en') {?>
            Important links
        <?} else {?>
            Важные ссылки
        <?}?>
    </h3>
    <ul>
        <?if (!empty($arResult)):
            foreach($arResult as $arItem){?>
                <li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
            <?}?>
        <?endif?>
    </ul>
</div>