<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?
foreach($arResult["ITEMS"] as $key1 => $arItem){
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="expo">
        <div class="img_min"><img src="<?=$arItem['IMG']['src']?>"></div>
        <div class="desc">
            <h2><?=$arItem['NAME']?></h2>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
<!--             <ul>
                <?foreach($arItem['PROPERTIES']['link']['VALUE'] as $key2 => $link){?>
                <li><a href="<?=$link?>"><?=$arItem['PROPERTIES']['link']['DESCRIPTION'][$key2]?></a></li>
                <?}?>
            </ul> -->
        </div>
        <?
        if($key1==2) echo "<div class='clearfix show_1040'></div>";
        ?>
    </div>
    <?
    if($key1==1) echo "<div class='clearfix show_1040'></div>";
    ?>
<?}?>
<div class="clearfix"></div>