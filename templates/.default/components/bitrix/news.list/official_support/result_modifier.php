<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $key => $arItem){
    $file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>100, 'height'=>100), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult['ITEMS'][$key]['IMG'] = $file;

    $letter = CFile::GetPath($arItem["PROPERTIES"]['letter']['VALUE']);
    $arResult['ITEMS'][$key]['letter_img'] = $letter;
}