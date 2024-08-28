<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
echo $arItem["PROPERTIES"]["file"]["VALUE"];
foreach($arResult['ITEMS'] as $key=> $arItem){

    $file1 = CFile::GetPath($arItem["PROPERTIES"]["file"]["VALUE"]);


    $arResult['ITEMS'][$key]['FILE'] =$file1;
}
?>