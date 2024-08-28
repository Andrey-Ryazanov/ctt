<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);


if(SITE_ID=='en'){
    $arResult['TXT']['all_news'] = 'All';
}else{
    $arResult['TXT']['all_news'] = 'Все';
}
?>
<div class="news_list">
    <?/*<ul>
		<li><a href="?year=2021">2021</a></li>
		<?//if(SITE_ID!='en'){?>
			<li><a href="?year=2020">2020</a></li>
		<?//}?>
		<?if(SITE_ID!='en'){?>
			<li><a href="?year=2019">2019</a></li>
		<?}?>
		<li><a href="?year=2018">2018</a></li>
        <li><a href="?year=2017">2017</a></li>
        <li><a href="?year=2016">2016</a></li>
		<?if(SITE_ID!='en'){?>
        	<li><a href="/news/"><?=$arResult['TXT']['all_news']?></a></li>
		<?}else{?>
			<li><a href="/en/news/"><?=$arResult['TXT']['all_news']?></a></li>
		<?}?>
    </ul>*/?>
    <?
    foreach($arResult["ITEMS"] as $key => $arItem){
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="item <?if($arItem["PROPERTIES"]["ctt_digest"]["VALUE"]){?><?}else{?>center<?}?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        	
<div class="img ">
<?if($arItem["PROPERTIES"]["ctt_digest"]["VALUE"]){?>

			<img src="/img/news/logo_3.jpg">

			<?}else{?>

	<img src="/img/news/logo.png">

				<?}?>
</div>
		
        	<div class="desc">
	            <span><i style="float: none; margin: 0 0 5px;"><?=$arItem['DISPLAY_ACTIVE_FROM']?></i></span>
				<?if ($arItem['DETAIL_TEXT']){?>
	            	<a class="name" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
				<?}else{?>
					<span class="name"><?=$arItem['NAME']?></span>
				<?}?>
	            <div class="clearfix"></div>
	            <span style="margin-bottom: 17px;"><?=$arItem['PREVIEW_TEXT']?></span>
	        </div>
        </div>
    <?}?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>