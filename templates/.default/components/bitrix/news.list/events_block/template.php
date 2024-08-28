<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<p><b><?=GetMessage("TITLE")?></b></p>
<div class="events_block">
    <?foreach($arResult['ITEMS'] as $arItem){?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
        <a target="_blank" href="<?=$arItem['PROPERTIES']['url']['VALUE']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <img src="<?=$arItem['img']['src']?>" alt="">
            <span class="date"><?=$arItem['PROPERTIES']['date']['VALUE']?></span>
            <span class="place"><?=$arItem['NAME']?></span>
        </a>
    <?}?>
</div>