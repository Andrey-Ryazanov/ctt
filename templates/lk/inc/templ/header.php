<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
?>
<div class="top_line">
    <a href="/" class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a>
    <?if ($USER->IsAuthorized()) {?><a href="#" id="logout" class="login">Выйти</a><?}?>
</div>
<div class="wide_line">Личный кабинет</div>