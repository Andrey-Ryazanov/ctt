<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>







<?
foreach($arResult["SECTIONS"] as $key => $arSection){
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="photo_gallery" id="<?=$this->GetEditAreaId($arItem['ID']);?>" >
        <h3><?=$arSection['NAME']?></h3>
        <div class="block">
            <?
            foreach($arResult["ITEMS"][$arSection['ID']] as $key2 => $arItem){
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" >
                    <a class="fancybox_gallery item" rel="fancybox_gallery" href="<?=$arItem['IMG']['big']['src']?>">
                        <img src="<?=$arItem['IMG']['mini']['src']?>">
                    </a>
                </div>
            <?}?>
        </div>
    </div>
<?}?>


<!--<pre>
<?/*print_r($arResult)*/?>
</pre>-->