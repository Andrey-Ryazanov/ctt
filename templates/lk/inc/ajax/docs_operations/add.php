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

if ($_FILES["file"]) {
    $file_array = array(
        "MODULE_ID" => "highloadblock"
    );

    $file = array_merge($file_array, $_FILES["file"]);

    if ($file_id = CFile::SaveFile($file, "exhibitors_docs/$user_id")) {
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

        $file_props = array();
        while($arData = $rsData->Fetch()) {
            $resFile = CFile::GetByID($file_id);
            $arFile = $resFile->Fetch();

            $file_props["size"] = CFile::FormatSize($arFile["FILE_SIZE"]);
            $file_props["src"] = CFile::GetPath($file_id);
            $file_info = pathinfo($file_props["src"]);
            $file_props["name"] = $file_info["filename"];
            $file_props["ext"] = $file_info["extension"];

            $arData["UF_FILE"][] = $file_id;
            $new_docs = $arData["UF_FILE"];
            $id = $arData["ID"];
        }
        $connection_abort = connection_aborted();
        if (!$connection_abort) {
            if ($update = $entity_data_class::update($id, array("UF_FILE" => $new_docs))) {
                echo $file_props["src"] . ' ; ' . $file_id;
            }
        }
        else {
            CFile::Delete($file_id);
        }
    }
}