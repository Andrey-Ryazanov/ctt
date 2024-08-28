<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['TXT']['0']='Партнеры';
if (SITE_ID=='en') {
	$arResult['TXT']['0']='Partners';
}

foreach($arResult["ITEMS"] as $key => $arItem){
    $file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>135, 'height'=>70), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["ITEMS"][$key]["PICT"] = $file;
}