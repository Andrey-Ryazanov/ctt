<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?
foreach($arResult["ITEMS"] as $key1 => $arItem){
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="expo expo_ban">
        <div class="img_min"><img src="<?=$arItem['IMG']['src']?>"></div>
        <div class="desc">
            <h2><?=$arItem['NAME']?></h2>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
<!--             <ul>
                <?foreach($arItem['PROPERTIES']['link']['VALUE'] as $key2 => $link){?>
                <li><a href="<?=$link?>"><?=$arItem['PROPERTIES']['link']['DESCRIPTION'][$key2]?></a></li>
                <?}?>
            </ul> -->
            <div class="button_list">
                <?foreach($arItem['PROPERTIES']['link']['VALUE'] as $key2 => $link){
                    ?>
                <a <?if($arItem['PROPERTIES']['link']['TARGET'][$key2]== '_blank'){?>target="_blank"<?}?> href="<?=$link?>"><?=$arItem['PROPERTIES']['link']['DESCRIPTION'][$key2]?></a>
                <?
                    //break;
                }?>
            </div>
        </div>
        <?
    //if($key1==2) echo "<div class='clearfix show_1040'></div>";
        ?>
        <?/*if($key1==1):?> 

            <div class="tabs_block show_1200">
              <div class="wrap_content">
                <div class="banners-block">
                  <a href="https://www.sanyglobal.com/ru/?erid=LdtCKeEEk" target="_blank" class="banners-block-image">
                    <img src="/img/sanyglobal 980x120.jpg" alt="sanyglobal">
                  </a>
                </div>
              </div>
            </div>
        <?endif;?>
        <?if($key1==2):?> 

            <div class="tabs_block show_1040">
              <div class="wrap_content">
                <div class="banners-block">
                  <a href="https://www.sanyglobal.com/ru/?erid=LdtCKeEEk" target="_blank" class="banners-block-image">
                    <img src="/img/sanyglobal 980x120.jpg" alt="sanyglobal">
                  </a>
                </div>
              </div>
            </div>

        <?endif;?>
        <?if($key1==6):?> 

            <div class="tabs_block show_680" >
              <div class="wrap_content">
                <div class="banners-block">
                  <a href="https://www.sanyglobal.com/ru/?erid=LdtCKeEEk" target="_blank" class="banners-block-image">
                    <img src="/img/sanyglobal 320x62.jpg" alt="sanyglobal">
                  </a>
                </div>
              </div>
            </div>

        <?endif;*/?>
    </div>
    <?
     //if($key1==1) echo "<div class='clearfix show_1040'></div>";
    ?>

<?}?>
<div class="clearfix"></div>