<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
foreach($arResult["ITEMS"] as $key1 => $arItem){
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="about-expo">
        <div class="desc">
            <h2><?echo ($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : $arItem['NAME'];?></h2>
            <ul>
                <li><a href="/en/tradefair/3d-stendy/<?=$arItem['CODE']?>/">Learn more</a></li>
            </ul>
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