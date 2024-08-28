<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="slider_footer">
    <?foreach($arResult['ITEMS'] as $arItem){
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" >
            <?if($arItem['PROPERTIES']['link']['VALUE']){?>
                <a class="item" target="_blank" href="<?=$arItem['PROPERTIES']['link']['VALUE']?>">
                    <img src="<?=$arItem['img']['src']?>" alt="">
                </a>
            <?}else{?>
                <a class="item">
                    <img src="<?=$arItem['img']['src']?>" alt="">
                </a>
            <?}?>
        </div>
    <?}?>
</div>