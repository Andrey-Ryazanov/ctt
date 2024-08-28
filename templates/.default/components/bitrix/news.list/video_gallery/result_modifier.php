<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();




$arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y', '!UF_NOW'=>'');
$db_list = CIBlockSection::GetList(Array('sort'=>'asc'), $arFilter, true);
while($ar_result = $db_list->GetNext()) {
    $arResult['SECTIONS'][]=$ar_result;
}



$items = array();
foreach($arResult['ITEMS'] as $arItem){
    $file1 = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>225, 'height'=>150), BX_RESIZE_IMAGE_EXACT, true);
    $arItem['IMG']['mini'] = $file1;
    $file2 = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>1200, 'height'=>1200), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arItem['IMG']['big'] = $file2;
    $items[$arItem['IBLOCK_SECTION_ID']][] = $arItem;
}
$arResult['ITEMS'] =$items;




