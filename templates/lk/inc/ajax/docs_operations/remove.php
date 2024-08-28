<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

if (!CModule::IncludeModule("highloadblock")) {
    ShowError(GetMessage("Модуль highloadblock не установлен."));
    return;
}

$hlblock_id_documents = 2;
$user_id = htmlspecialchars($_POST["user_id"]);
$file_id = htmlspecialchars($_POST["file_id"]);
$key_data = htmlspecialchars($_POST["key"]);
$key_data = intval($key_data) + 1;

$hlblock = HL\HighloadBlockTable::getById($hlblock_id_documents)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$filter = array("UF_USERID" => intval($user_id));
$rsData = $entity_data_class::getList(array(
    "select" => array("*"),
    "filter" => $filter,
    "limit" => 1,
    "order" => array("ID" => "ASC")
));

$i = 0;
$cons = 0;
while($arData = $rsData->Fetch()) {
    $id = $arData["ID"];
    foreach ($arData["UF_FILE"] as $key => $hb_fileid) {
        if ($hb_fileid == $file_id) {
            CFile::Delete($hb_fileid);
            unset($arData["UF_FILE"][$key]);
            $cons++;
        }
    }
    if (!$cons) {
        unset($arData["UF_FILE"][$key_data]);
    }
    $new_docs = $arData["UF_FILE"];
}

if ($update = $entity_data_class::update($id, array("UF_FILE" => $new_docs))) {
    echo 1;
}