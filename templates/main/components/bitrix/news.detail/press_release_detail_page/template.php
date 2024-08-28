<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--<pre><?/*print_r($_REQUEST)*/?></pre>-->

<div class="new_detail">
<div class="date"><?=$arResult['DISPLAY_ACTIVE_FROM']?></div>
    <?if($arResult['DETAIL_PICTURE']['SRC']):?>
        <div class="img"><img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>"></div>
    <?else:?>
    	<?if($arResult['PREVIEW_PICTURE']['SRC']):?>
        	<div class="img"><img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>"></div>
   		<?endif;
    endif;?>
    <div class="text_new"><?
    	if($arResult['DETAIL_TEXT']){
    		echo $arResult['DETAIL_TEXT'];
    	}else{
    		echo $arResult['PREVIEW_TEXT'];
    	}
    	?>
	</div>
</div>
<?if($arResult["CODE"]=='ctt-expo-2024-vystavka-opredelyayushchaya-budushchee-stroitelnoy-otrasli'):?>
<style>
h1 {
padding-right: 0;

}
</style>
<?endif;?>
<?if($arResult["CODE"]=='expo-2024-breakthrough-in-the-russian-exhibition-industry' || $arResult["CODE"]=='stt-expo-2024-samaya-masshtabnaya-otraslevaya-vystavka-strany-nachinaet-rabotu-cherez-2-nedeli' || $arResult["CODE"]=='expo-2024-proryv-v-vystavochnoy-industrii-rossii'):?>
<style>
h1 {
padding-right: 0;
    padding-bottom: 26px !important;
}
</style>
<?endif;?>