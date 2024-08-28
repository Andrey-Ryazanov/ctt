<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
foreach($arResult["ITEMS"] as $key1 => $arItem){
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="expo">
        <div class="img_min">
                    <a class="fancybox_gallery item" rel="fancybox_gallery" href="<?=$arItem['IMG']['big']['src']?>">
                        <img src="<?=$arItem['IMG']['mini']['src']?>">
                    </a>
	</div>
    </div>
<?}?>
<div class="clearfix"></div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>