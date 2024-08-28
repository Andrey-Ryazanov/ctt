<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
    <div class="main_nav">
        <a class="main_nav_320" href="#">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <div class="block">
            <?foreach($arResult["MENU"]['level1'] as $arItem){?>
                <div class="item">
                    <!--<a class="arr_back" href="#">Назад</a>-->
                    <a class="main_link" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
                    <div class="wrap_sub_nav">
                        <div class="sub_nav_1">
                            <!--<a class="arr_back" href="#">Назад</a>-->
                            <?foreach($arResult["MENU"]['level2'][$arItem['TEXT']] as $arItem2){?>
                                <div class="sub_item_1">
                                    <a class="sub_link_1" href="<?=$arItem2['LINK']?>"><?=$arItem2['TEXT']?><?if($arResult["MENU"]['level3'][$arItem2['TEXT']]){?><span></span><?}?></a>
                                    <div class="sub_nav_2">
                                        <!--<a class="arr_back" href="#">Назад</a>-->
                                        <?foreach($arResult["MENU"]['level3'][$arItem2['TEXT']] as $arItem3){?>
                                            <div class="sub_item_2">
                                                <a class="sub_link_2" href="<?=$arItem3['LINK']?>"><?=$arItem3['TEXT']?><?if($arResult["MENU"]['level4'][$arItem3['TEXT']]){?>
                                                        <span></span><?}?></a>
                                                <?if($arResult["MENU"]['level4'][$arItem3['TEXT']]){?>
                                                    <div class="sub_nav_3">
                                                        <!--<a class="arr_back" href="#">Назад</a>-->
                                                        <?foreach($arResult["MENU"]['level4'][$arItem3['TEXT']] as $arItem4){?>
                                                            <div class="sub_item_3">
                                                                <a class="sub_link_3" href="<?=$arItem4['LINK']?>"><?=$arItem4['TEXT']?><?if($arResult["MENU"]['level5'][$arItem4['TEXT']]){?>
                                                                        <span></span><?}?></a>
                                                                <?if($arResult["MENU"]['level5'][$arItem4['TEXT']]){?>
                                                                    <div class="sub_nav_4">
                                                                        <!--<a class="arr_back" href="#">Назад</a>-->
                                                                        <?foreach($arResult["MENU"]['level5'][$arItem4['TEXT']] as $arItem5){?>
                                                                            <div class="sub_item_4">
                                                                                <a class="sub_link_4" href="<?=$arItem5['LINK']?>"><?=$arItem5['TEXT']?></a>
                                                                            </div>
                                                                        <?}?>
                                                                    </div>
                                                                <?}?>
                                                            </div>
                                                        <?}?>
                                                    </div>
                                                <?}?>
                                            </div>
                                        <?}?>
                                    </div>
                                </div>
                            <?}?>
                        </div>
                    </div>
                </div>
            <?}?>
            <div class="clearfix"></div>
        </div>
    </div>
<?}?>