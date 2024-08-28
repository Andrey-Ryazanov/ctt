<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
$path=explode('/', $dir);

if (isset($arParams['PARENT_SECTION']) && $arParams['PARENT_SECTION']) {
    if (isset($arParams['ADDITIONAL_SECTIONS'])) {
        // $arParams['PARENT_SECTION'] = [$arParams['PARENT_SECTION']];
        $merged = array_merge([$arParams['PARENT_SECTION']], $arParams['ADDITIONAL_SECTIONS']);
        $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y', '!UF_NOW'=>'', 'ID'=>$merged);
    }
    else
    {
        $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y', '!UF_NOW'=>'', 'ID'=>$arParams['PARENT_SECTION']);
    }
}
else
{
    $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y', '!UF_NOW'=>'');
}

// $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y', '!UF_NOW'=>'');
$db_list = CIBlockSection::GetList(Array('sort'=>'asc'), $arFilter, true,Array('NAME','ID','UF_MORE_PHOTO','UF_TEXT_URL','UF_NAME'));
while($ar_result = $db_list->GetNext()) {

    if($path[1]=='en' &&  $ar_result["UF_NAME"]){
        $ar_result["NAME"] = $ar_result["UF_NAME"];
    }

    if($ar_result["UF_TEXT_URL"]){
        if($path[1]=='en'){
            $ar_result["UF_MORE_PHOTO"] = '<a href="/en'.$ar_result['UF_MORE_PHOTO'].'">'.$ar_result["NAME"].'</a>';
        }else{
            $ar_result["UF_MORE_PHOTO"] = '<a href="'.$ar_result['UF_MORE_PHOTO'].'">'.$ar_result["UF_TEXT_URL"].'</a>';     
        }
    }else{
        if($ar_result["UF_MORE_PHOTO"]){
            if($path[1]=='en'){
                $ar_result["UF_MORE_PHOTO"] = '<a href="/en'.$ar_result['UF_MORE_PHOTO'].'">More photo</a>';
            }else{
                $ar_result["UF_MORE_PHOTO"] = '<a href="'.$ar_result['UF_MORE_PHOTO'].'">Больше фото</a>';     
            }
        }       
    }

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




