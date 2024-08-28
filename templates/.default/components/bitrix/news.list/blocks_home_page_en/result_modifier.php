<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as $key => $arItem){
    $file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>290, 'height'=>120), BX_RESIZE_IMAGE_EXACT, true);
    $arResult['ITEMS'][$key]['IMG'] = $file;

    foreach($arItem['PROPERTIES']['link']['VALUE'] as $key2 => $link){
        $url=substr($link, 0, 4);

		$url_2 = explode('.', $_SERVER['SERVER_NAME']);
		$url_3 = $url_2[1].'.'.$url_2[2];

        $url_4 = explode($url_3, $link);
        if($url=='http' && $url_4[1]==''){
        	$arResult['ITEMS'][$key]['PROPERTIES']['link']['TARGET'][$key2] = '_blank';
        }
	}
}