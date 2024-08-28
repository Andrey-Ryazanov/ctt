<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$menu=array();
foreach ($arResult as $arItem) {
    if ($arItem['DEPTH_LEVEL']==1) {
        $menu['level1'][]=$arItem;
        $level1=$arItem['TEXT'];
    }
    if ($arItem['DEPTH_LEVEL']==2) {
        $menu['level2'][$level1][]=$arItem;
        $level2=$arItem['TEXT'];
    }


    if ($arItem['DEPTH_LEVEL']==3) {
        $menu['level3'][$level2][]=$arItem;
        $level3=$arItem['TEXT'];
    }
    if ($arItem['DEPTH_LEVEL']==4) {
        $menu['level4'][$level3][]=$arItem;
        $level4=$arItem['TEXT'];
    }
    if ($arItem['DEPTH_LEVEL']==5) {
        $menu['level5'][$level4][]=$arItem;
    }

}
$arResult["MENU"]=$menu;
?>