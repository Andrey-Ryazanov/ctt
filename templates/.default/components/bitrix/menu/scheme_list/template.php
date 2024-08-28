<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
    <div class="list">
        <a id="icon_list" class="icon_list" href="#"></a>
        <div class="sub_nav_980 sub_nav_320">
        <?foreach($arResult as $arItem){?>
        	<a class='item <?if($arItem["PARAMS"]["IMG_URL"]){?>sub_w<?}?>' href="<?=$arItem['LINK']?>">
	        	<?if($arItem["PARAMS"]["IMG_URL"]){?>
                    <img alt="<?=$arItem['TEXT']?>" src="<?=$arItem["PARAMS"]["IMG_URL"]?>">
                    <span>CTT Digest</span>
                <?}?>
	            <?=$arItem['TEXT']?>
            </a>
        <?}?>
        </div>
    </div>
<?endif?>



