<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
    <div class="list">
        <a id="icon_list" class="icon_list" href="#"></a>
        <div class="sub_nav_980 sub_nav_320">
        <?foreach($arResult as $arItem){?>
            <a class="item" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
        <?}?>
        </div>
    </div>
<?endif?>

