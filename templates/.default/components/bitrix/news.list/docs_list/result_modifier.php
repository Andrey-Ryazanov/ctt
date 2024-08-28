<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
	function file_size($size) {
		$filesizename = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
		return $size ? round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $filesizename[$i] : '0 Bytes';
	}
	foreach($arResult["ITEMS"] as $key=> $arItem){
		$file = CFile::GetByID($arItem["PROPERTIES"]["file"]["VALUE"]);
        $arFile = $file->Fetch();

        $name=explode('.', $arFile['FILE_NAME']);
        $date=explode(' ', $arFile['TIMESTAMP_X']);

        $file_url = CFile::GetPath($arItem["PROPERTIES"]["file"]["VALUE"]);

		if($arFile){
			$arResult["ITEMS"][$key]["FILE"]["NAME"]=$name[0];
			$arResult["ITEMS"][$key]["FILE"]["SIZE"]=file_size($arFile['FILE_SIZE']);
			$arResult["ITEMS"][$key]["FILE"]["FORMAT"]=$name[1];
			$arResult["ITEMS"][$key]["FILE"]["URL"]=$file_url;
		}
	}
?>
