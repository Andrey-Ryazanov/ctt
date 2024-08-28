<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<table class="table-list-parts">
	<thead>
		<tr>
			<th>Company name (Eng)</th>
			<th>Название компании (Рус)</th>
			<th>Country of Application</th>
		</tr>
	</thead>
	<tbody>
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			<tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<td><?=$arItem["DISPLAY_PROPERTIES"]['NAME_ENG']["DISPLAY_VALUE"]?></td>
				<td><?=$arItem["NAME"]?></td>
				<td><?=$arItem["DISPLAY_PROPERTIES"]['COUNTRY']["DISPLAY_VALUE"]?></td>
			</tr>
		<?endforeach;?>
	</tbody>
</table>

<br /><?=$arResult["NAV_STRING"]?>