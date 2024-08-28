<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?

foreach($arResult["SECTIONS"] as $key => $arSection){
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?if($arSection["UF_TEXT_URL"]):?>
        <div class="photo_gallery only_link" id="<?=$this->GetEditAreaId($arItem['ID']);?>" >
          <h3 class="open_fancy"><?=$arSection['UF_MORE_PHOTO']?></h3>
        </div>
    <?else:?>
        <div class="photo_gallery video_gallery" id="<?=$this->GetEditAreaId($arItem['ID']);?>" >
    		<h3 class="open_fancy" data-rel="fancybox_gallery<?=$key?>" ><?=$arSection['NAME']?></h3>
            <div class="block-video">
                <?
                foreach($arResult["ITEMS"][$arSection['ID']] as $key2 => $arItem){


                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    
                    ?>

                    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" >
                        <a class="fancybox_gallery item fancybox-you<?=$arSection['ID']?>" rel="fancybox_gallery<?=$key?>" data-type="iframe" href="<?=$arItem['PROPERTIES']['YT_LINK']['VALUE']?>">
                            <img src="<?=$arItem['IMG']['mini']['src']?>">
                        </a>
                        <div class="title-video"> <?=$arItem['NAME']?> </div>
                    </div>

                <?}?>
            </div>
            <?if($arSection['UF_MORE_PHOTO']):?>
                <div class="more_photo_link">
                    <?=$arSection['UF_MORE_PHOTO']?>
                </div>
            <?endif;?>
        </div>
    <?endif;?> 
<?}?>
<script>
    jQuery(document).ready(function($){
        $(".fancybox-you<?=$arSection['ID']?>").on("click", function(){
            $.fancybox({
            href: this.href,
            type: $(this).data("type")
            }); // fancybox
            return false   
        });
    });

</script>

<!--<pre>
<?/*print_r($arResult)*/?>
</pre>-->

<!-- <img src="<?=$arItem['IMG']['mini']['src']?>"> -->