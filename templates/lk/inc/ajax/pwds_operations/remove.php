<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

if (!CModule::IncludeModule("highloadblock")) {
    ShowError(GetMessage("Модуль highloadblock не установлен."));
    return;
}

$hlblock_id_passwords = 1;
$name = htmlspecialchars($_POST["name"]);
$password = htmlspecialchars($_POST["password"]);
$user_id = htmlspecialchars($_POST["user_id"]);

$prop_value = $name . " | " . $password;

$hlblock = HL\HighloadBlockTable::getById($hlblock_id_passwords)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$filter = array("UF_USERID" => intval($user_id));
$rsData = $entity_data_class::getList(array(
    "select" => array("*"),
    "filter" => $filter,
    "limit" => 1,
    "order" => array("ID" => "ASC")
));

$new_passwords = array();
while($arData = $rsData->Fetch()) {
    $id = $arData["ID"];
    foreach ($arData["UF_PASSWORD"] as $key => $arPassword) {
        if ($prop_value == $arPassword) {
           unset($arData["UF_PASSWORD"][$key]);
        }
    }
    $new_passwords = $arData["UF_PASSWORD"];
}

if ($update = $entity_data_class::update($id, array("UF_PASSWORD" => $new_passwords))) {
    echo "1";
}