<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if ($_POST["login"]) {
    $login = htmlspecialchars($_POST["login"]);
    $password = htmlspecialchars($_POST["password"]);
    $remember = $_POST["remember"];

    if ($auth = $USER->Login($login, $password, $remember)) {
        if ($auth["TYPE"] == "ERROR") {
            ShowMessage($auth);
        }
        else {
            echo "auth_complete";
        }
    }
}
?>
