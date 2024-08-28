<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as $key => $arItem){
    $file1 = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>180, 'height'=>120), BX_RESIZE_IMAGE_EXACT, true);
    $arItem['mini'] = $file1;
    $file2 = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>1200, 'height'=>1200), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arItem['big'] = $file2;
    $arResult['ITEMS'][$key]['IMG'] = $arItem;
}
