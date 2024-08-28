<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
global $USER;

$login = htmlspecialchars($_POST["email"]);

$rsUser = CUser::GetByLogin($login);
$arUser = $rsUser->Fetch();

$arResult = $USER->SendPassword($login, $arUser["EMAIL"]);

if($arResult["TYPE"] == "OK") {?>
    <div class="check_mark"></div>
            <div class="txt">На ваш email была выслана инструкция <br>для смены пароля</div>
            <button class="ok">Ok</button>
<?}
else echo "2";