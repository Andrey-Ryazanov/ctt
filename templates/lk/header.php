<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead()?>
    <!-- META START -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- META END -->

    <!-- FAVICONS START -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <!-- FAVICONS START -->

    <!-- ASSETS (JS & CSS) START -->
    <?include_once ($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/inc/templ/assets.php")?>
    <!-- ASSETS (JS & CSS) END -->

    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel()?></div>
<div class="wrapper">
    <div class="inner">
        <header>
            <?include_once ($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/inc/templ/header.php")?>
        </header>
        