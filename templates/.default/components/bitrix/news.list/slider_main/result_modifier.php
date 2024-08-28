<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as $key => $arItem){
    $file1 = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>980, 'height'=>360), BX_RESIZE_IMAGE_EXACT, true);
    $arResult['ITEMS'][$key]['IMG']['big'] = $file1;

    $file2 = CFile::ResizeImageGet($arItem['PROPERTIES']['slide_mob']['VALUE'], array('width'=>320, 'height'=>185), BX_RESIZE_IMAGE_EXACT, true);
    $arResult['ITEMS'][$key]['IMG']['mob'] = $file2;
}