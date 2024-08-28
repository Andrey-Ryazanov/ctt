<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$cp = $this->__component; 
if (is_object($cp))
{
	if (!empty($arResult['PROPERTIES']['NAME_HTML']['~VALUE']))
	{
		$cp->arResult['NAME_HTML'] = $arResult['PROPERTIES']['NAME_HTML']['~VALUE']['TEXT'];
 		$cp->SetResultCacheKeys(array('NAME_HTML'));
		$arResult['NAME'] = $cp->arResult['NAME_HTML'];
	}
}