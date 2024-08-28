<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="news">
    <h2>
        <a href="<?=SITE_DIR?>news/"><?=$arResult['TXT']['0']?></a>
    </h2>
    <div class="block">
        <?
        $k = 0;
        foreach($arResult["ITEMS"] as $key => $arItem){
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $k++;
            ?>
            <div class="s_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<i><?=$arItem['DISPLAY_ACTIVE_FROM']?></i>
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
                <span><?=$arItem['PREVIEW_TEXT']?></span>
            </div>
            <?if($k%2 == 0) echo "<div class='clearfix'></div>"?>
        <?}?>
        <?if($k%2 != 0) echo "<div class='clearfix'></div>"?>
    </div>
</div>