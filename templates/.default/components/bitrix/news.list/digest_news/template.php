<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

?>
<div class="news_list digest_news">
    <?
    foreach($arResult["ITEMS"] as $key => $arItem){
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <span><i style="float: none; margin: 0 0 5px;"><?=$arItem['DISPLAY_ACTIVE_FROM']?></i></span>
            <a class="title" href=""><?=$arItem['NAME']?></a>
            <div class="clearfix"></div>
            <div class="dexc">
                <?if($arItem['PREVIEW_PICTURE']["SRC"]){?>
                  <div class="img">
                    <img src="<?=$arItem['PREVIEW_PICTURE']["SRC"]?>">
                  </div>
                <?}?>
                <span style="margin-bottom: 17px;">
                  <?=$arItem['PREVIEW_TEXT']?>
                  <?if($arItem["PROPERTIES"]['link']['VALUE']){?>
                      <a href="<?=$arItem["PROPERTIES"]['link']['VALUE']?>">
                        <?=$arItem["PROPERTIES"]['link']['NAME']?>
                      </a>
                  <?}?>               
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
    <?}?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>