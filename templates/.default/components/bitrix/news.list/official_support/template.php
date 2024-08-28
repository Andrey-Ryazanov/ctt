<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="official_support">
    <?foreach($arResult["ITEMS"] as $arItem){
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="img_org"><img src="<?=$arItem['IMG']['src']?>"></div>
            <div class="description">
                <div class="name"><?=$arItem['NAME']?></div>
                <div class="letter"><a target="_blank" href="<?=$arItem['letter_img']?>"><?=$arItem['PROPERTIES']['letter']['DESCRIPTION']?></a></div>
            </div>
            <div class="clearfix"></div>
        </div>
    <?}?>
</div>

<!--<pre>
    <?/*print_r($arResult["ITEMS"][0])*/?>
</pre>-->
