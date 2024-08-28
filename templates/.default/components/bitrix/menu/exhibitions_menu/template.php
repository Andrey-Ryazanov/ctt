<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="sub_menu">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>

		<a target="_blank" class="sub_link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>

	
<?endforeach?>

</div>
<?endif?>