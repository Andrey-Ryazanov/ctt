<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="inner_content ">
    <?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?if($arItem["FILE"]){?>
	 <span style="font-size: 13pt;" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><br>
		<div class="red_arr">
		</div>
		 &nbsp;<a href="<?=$arItem["FILE"]?>" target="_blank"><?=$arItem["NAME"]?></a><br>
	 <br>
	 </span>
	 <?}?>
<?endforeach;?>
</div>