<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['ITEMS'] as $key => $item) {
	if ($item['PREVIEW_PICTURE']) {
		$arResult['ITEMS'][$key]['PREVIEW_PICTURE']['re_src'] = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], ['width' => 180, 'height' => 180,])['src'];
	}
	if ($item["PROPERTIES"]['file']['VALUE']) {
		$arResult['ITEMS'][$key]['file_src'] = CFile::GetPath($item["PROPERTIES"]['file']['VALUE']);
	} elseif ($item['PROPERTIES']['file_link']['VALUE']) {
		$arResult['ITEMS'][$key]['file_src'] = $item['PROPERTIES']['file_link']['VALUE'];
	} else {
		unset($arResult['ITEMS'][$key]);
	}

	if(!empty($item['PROPERTIES']['theme']['VALUE'])) {
		$arResult['ITEMS'][$key]['theme'] = $item['PROPERTIES']['theme']['VALUE'];
	}

	if(!empty($item['PROPERTIES']['custom_name']['~VALUE']['TEXT'])) {
		$arResult['ITEMS'][$key]['NAME'] = $item['PROPERTIES']['custom_name']['~VALUE']['TEXT'];
	}
}
