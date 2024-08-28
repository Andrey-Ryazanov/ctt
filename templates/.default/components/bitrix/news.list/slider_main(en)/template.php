<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="myCarousel1" class="carousel slide" data-interval="500000" data-ride="carousel">
    <div class="carousel-inner">
        <?
        foreach($arResult["ITEMS"] as $key => $arItem){
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="<?if($key == 0) echo "active"?> item"><img src="<?=$arItem['IMG']['src']?>" alt=""></div>
        <?}?>
    </div>
    <div class="carousel-indicators">
        <?
        foreach($arResult["ITEMS"] as $key => $arItem){
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
</div>