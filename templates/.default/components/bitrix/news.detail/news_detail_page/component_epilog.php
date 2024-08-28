<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if(!empty($arResult['NAME_HTML']))
{
    $APPLICATION->SetTitle(strip_tags($arResult['NAME_HTML']));
}

?>