<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="myCarousel1" class="carousel slide" data-interval="10000" data-ride="carousel">
    <div class="carousel-inner">
        <?
        $i = 0;
        foreach($arResult["ITEMS"] as $key => $arItem){
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            if($arItem["PROPERTIES"]["under_slider"]["VALUE"]){
                continue;
            }
            $i++;
            ?>
            <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="<?if($key == 0) echo "active"?> item">
                <?//if ($arItem["PROPERTIES"]["link"]["VALUE"]) {
$url=substr($arItem["PROPERTIES"]["link"]["VALUE"], 0, 4);
?><a <?if($url=='http'){?>target="_blank"<?}?> href="<?=$arItem["PROPERTIES"]["link"]["VALUE"]?>" class="mn_link"><?//}?>
                    <img src="<?=$arItem['IMG']['big']['src']?>">
                </a>
                <?//if ($arItem["PROPERTIES"]["link"]["VALUE"]) {
?>

<a <?if($url=='http'){?>target="_blank"<?}?> href="<?=$arItem["PROPERTIES"]["link"]["VALUE"]?>" class="mb_link"><?//}?>
                    <img src="<?=$arItem['IMG']['mob']['src']?>">
                </a>
        
                    <?if ($arItem["PROPERTIES"]["btn"]["VALUE"]) {?>
                        <a href="<?=$arItem["PROPERTIES"]["btn"]["DESCRIPTION"]?>" class="btn_btn_primary"  download=""><?=$arItem["PROPERTIES"]["btn"]["VALUE"]?></a>
                    <?}?>
         
            </div>
        <?}?>
    </div>

    <?if($i>1){?>
        <div class="carousel-indicators">
            <?
            foreach($arResult["ITEMS"] as $key => $arItem){
                if($arItem["PROPERTIES"]["under_slider"]["VALUE"]){
                    continue;
                }
                ?>
                <span class="<?if($key == 0) echo "active"?>" data-target="#myCarousel1" data-slide-to="<?=$key?>"></span>
            <?}?>
        </div>
        <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel1" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    <?}?>

</div>

    <div class="under_slider">
        <?
        foreach($arResult["ITEMS"] as $key => $arItem){
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            if(!$arItem["PROPERTIES"]["under_slider"]["VALUE"]){
                continue;
            }
            ?>
            <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="item">
                <?
$url=substr($arItem["PROPERTIES"]["link"]["VALUE"], 0, 4);
?><a <?if($url=='http'){?>target="_blank"<?}?> href="<?=$arItem["PROPERTIES"]["link"]["VALUE"]?>" class="mn_link">
                    <img src="<?=$arItem['IMG']['big']['src']?>">
                </a>
                <a <?if($url=='http'){?>target="_blank"<?}?> href="<?=$arItem["PROPERTIES"]["link"]["VALUE"]?>" class="mb_link"><??>
                    <img src="<?=$arItem['IMG']['mob']['src']?>">
                </a>         
            </div>
        <?}?>
    </div>