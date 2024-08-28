<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$db_list = CIBlockSection::GetList(['SORT' => 'ASC'], ['ACTIVE' => 'Y', 'GLOBAL_ACTIVE' => 'Y', 'IBLOCK_ID' => $arResult['ID']], true);
while ($ar_result = $db_list->GetNext()) {
    foreach ($arResult['ITEMS'] as $arItem) {
        if ($arItem['IBLOCK_SECTION_ID'] == $ar_result['ID']) {
            $ar_result['ITEMS'][] = $arItem;
        }
    }
    if (count($ar_result['ITEMS']) != 0) {
        $arResult['SECTIONS'][] = $ar_result;
    }
}
foreach ($arResult['ITEMS'] as $arItem) {
    if (!$arItem['IBLOCK_SECTION_ID']) {
        $arResult['NO_SECTION_ITEMS'][] = $arItem;
    }
}
