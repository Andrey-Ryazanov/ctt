<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */

//one css for all system.auth.* forms
$APPLICATION->SetAdditionalCSS("/bitrix/css/main/system.auth/flat/style.css");
?>

<div class="bx-authform" style="margin: 0 auto; padding: 0 20px;">

    <?
    if(!empty($arParams["~AUTH_RESULT"])):
        $text = str_replace(array("<br>", "<br />"), "\n", $arParams["~AUTH_RESULT"]["MESSAGE"]);
        ?>
        <div class="alert <?=($arParams["~AUTH_RESULT"]["TYPE"] == "OK"? "alert-success":"alert-danger")?>"><?=nl2br(htmlspecialcharsbx($text))?></div>
    <?endif?>

    <form method="post" action="<?=$arResult["AUTH_FORM"]?>" name="bform">
        <?if (strlen($arResult["BACKURL"]) > 0): ?>
            <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
        <? endif ?>
        <input type="hidden" name="AUTH_FORM" value="Y">
        <input type="hidden" name="TYPE" value="CHANGE_PWD">

        <div class="bx-authform-formgroup-container" style="margin-bottom: 0;">
            <div class="bx-authform-input-container">
                <input type="hidden" name="USER_LOGIN" maxlength="255" value="<?=$arResult["LAST_LOGIN"]?>" />
            </div>
        </div>

        <div class="bx-authform-formgroup-container" style="margin-bottom: 0;">
            <div class="bx-authform-input-container">
                <input type="hidden" name="USER_CHECKWORD" maxlength="255" value="<?=$arResult["USER_CHECKWORD"]?>" />
            </div>
        </div>

        <div class="bx-authform-formgroup-container">
            <div class="bx-authform-label-container"><?=GetMessage("AUTH_NEW_PASSWORD_REQ")?></div>
            <div class="bx-authform-input-container">
                <?if($arResult["SECURE_AUTH"]):?>
                    <div class="bx-authform-psw-protected" id="bx_auth_secure" style="display:none"><div class="bx-authform-psw-protected-desc"><span></span><?echo GetMessage("AUTH_SECURE_NOTE")?></div></div>

                    <script type="text/javascript">
                        document.getElementById('bx_auth_secure').style.display = '';
                    </script>
                <?endif?>
                <input type="password" name="USER_PASSWORD" maxlength="255" value="<?=$arResult["USER_PASSWORD"]?>" autocomplete="off" />
            </div>
        </div>

        <div class="bx-authform-formgroup-container">
            <div class="bx-authform-label-container"><?=GetMessage("AUTH_NEW_PASSWORD_CONFIRM")?></div>
            <div class="bx-authform-input-container">
                <?if($arResult["SECURE_AUTH"]):?>
                    <div class="bx-authform-psw-protected" id="bx_auth_secure_conf" style="display:none"><div class="bx-authform-psw-protected-desc"><span></span><?echo GetMessage("AUTH_SECURE_NOTE")?></div></div>

                    <script type="text/javascript">
                        document.getElementById('bx_auth_secure_conf').style.display = '';
                    </script>
                <?endif?>
                <input type="password" name="USER_CONFIRM_PASSWORD" maxlength="255" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" autocomplete="off" />
            </div>
        </div>

        <div class="bx-authform-formgroup-container">
            <input type="submit" class="btn btn-primary" name="change_pwd" value="<?=GetMessage("AUTH_CHANGE")?>" style="width: 140px;
    padding: 12px 0;
    border: 0;
    outline: none;
    background-color: #b52a26;
    color: #fff;
    font: 400 16px/18px Arial;
    text-align: center;
"/>
        </div>

        <div class="bx-authform-description-container">
            <?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?>
        </div>

    </form>

</div>

<script type="text/javascript">
    document.bform.USER_LOGIN.focus();
</script>
