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
$password = $_POST["password"];
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

while($arData = $rsData->Fetch()) {
    $id = $arData["ID"];
    $arData["UF_PASSWORD"][] = $prop_value;
    $new_passwords = $arData["UF_PASSWORD"];
}

if ($update = $entity_data_class::update($id, array("UF_PASSWORD" => $new_passwords))) {?>
    <div class="inp">
        <span class="i_title"><?=$name?></span>
        <div class="line">
            <div class="pwd_line">
                <input type="password" value="<?=$password?>" readonly="">
                <span class="show_pwd"></span>
            </div>
            <button class="copy_pwd">Копировать</button>
            <span class="clear"></span>
        </div>
    </div>
<?}?>