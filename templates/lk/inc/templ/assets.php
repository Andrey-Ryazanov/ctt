<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Page\Asset;

// STYLES START
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-grid.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery.fancybox.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/media_980.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/media_320.css");
// STYLES END

// JS START
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");
// JS END