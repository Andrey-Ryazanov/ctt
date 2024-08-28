<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;
global $arUser;

$hlblock_id_passwords = 1;
$hlblock_id_documents = 2;
$result = array();

// get passwords start
$hlblock = HL\HighloadBlockTable::getById($hlblock_id_passwords)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$filter = array("UF_USERID" => intval($arUser["ID"]));
$rsData = $entity_data_class::getList(array(
    "select" => array("*"),
    "filter" => $filter,
    "limit" => 1,
    "order" => array("ID" => "ASC")
));

while($arData = $rsData->Fetch()) {
    foreach ($arData["UF_PASSWORD"] as $arPassword) {
        $password = explode(' | ', $arPassword);
        $result["passwords"][] = $password;
    }
}
// get passwords end

// get documents start
$hlblock = HL\HighloadBlockTable::getById($hlblock_id_documents)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$filter = array("UF_USERID" => intval($arUser["ID"]));
$rsData = $entity_data_class::getList(array(
    "select" => array("*"),
    "filter" => $filter,
    "limit" => 1,
    "order" => array("ID" => "ASC")
));

$i = 0;
while($arData = $rsData->Fetch()) {
    foreach ($arData["UF_FILE"] as $FileID) {
        $resFile = CFile::GetByID($FileID);
        $arFile = $resFile->Fetch();
        $result["documents"][$i]["id"] = $arFile["ID"];
        $result["documents"][$i]["name"] = $arFile["ORIGINAL_NAME"];
        $result["documents"][$i]["size"] = CFile::FormatSize($arFile["FILE_SIZE"]);
        $result["documents"][$i]["src"] = CFile::GetPath($FileID);
        $i++;
    }
}
// get documents end