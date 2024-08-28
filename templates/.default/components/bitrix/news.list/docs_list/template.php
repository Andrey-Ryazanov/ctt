<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="important_links">
    <h3 class="hidden_date">
      	<?=$arResult["NAME"]?>
      </h3>
    <ul>
    <?foreach($arResult["ITEMS"] as $arItem){?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
       <li  id="<?=$this->GetEditAreaId($arItem['ID']);?>"><a href="<?=$arItem["FILE"]["URL"]?>"><b><?=$arItem["NAME"]?></b> <span>(<?=$arItem["FILE"]["FORMAT"]?>, <?=$arItem["FILE"]["SIZE"]?>)</span></a></li>
    <?}?>
    </ul>
</div>