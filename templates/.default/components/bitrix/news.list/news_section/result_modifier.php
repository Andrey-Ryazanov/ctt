<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as $key => $arItem)
{
    if (!empty($arItem['PROPERTIES']['NAME_HTML']['~VALUE']))
    {
        $arResult['ITEMS'][$key]["NAME"] = $arItem['PROPERTIES']['NAME_HTML']['~VALUE']['TEXT'];
    }
}

