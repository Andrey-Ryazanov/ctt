<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="mediapartners">
    <?foreach($arResult["ITEMS"] as $arItem){
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <?if($arItem['IMG']['src']){?>
                <img src="<?=$arItem['IMG']['src']?>">
                <a target="_blank" href="<?=$arItem['PROPERTIES']['link']['VALUE']?>"><?=$arItem['NAME']?></a>
            <?} else{?>
                <a class="pad_120" target="_blank" href="<?=$arItem['PROPERTIES']['link']['VALUE']?>"><?=$arItem['NAME']?></a>
            <?}?>
        </div>
    <?}?>
</div>

<!--<pre>
    <?/*print_r($arResult["ITEMS"])*/?>
</pre>-->
