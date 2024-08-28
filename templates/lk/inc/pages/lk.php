<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if (!$USER->IsAuthorized()) {
    LocalRedirect('/exhibitors/lk/login/');
}
$rsUser = CUser::GetByID($USER->GetID());
$arUser = $rsUser->Fetch();
include_once ($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/inc/get_user_data.php");
global $result;
?>
<div class="content">
    <div class="left_cnt">
        <div class="info">
            <div class="title">Информация</div>
            <form id="info">
                <input type="hidden" id="user_id" value="<?=$USER->GetID()?>">
                <div class="inp">
                    <span class="i_title">Наименование</span>
                    <input type="text" name="name" value="<?=htmlspecialchars($USER->GetFirstName())?>" readonly>
                </div>
                <div class="line">
                    <div class="inp">
                        <span class="i_title">Логин</span>
                        <input type="text" name="login" value="<?=$USER->GetLogin()?>" readonly>
                    </div>
                    <div class="inp">
                        <span class="i_title">Пароль</span>
                        <div class="pwd_line">
                            <input type="password" name="password" value="<?=$arUser["UF_PASSWORD"]?>" readonly>
                            <span class="show_pwd"></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="pwds">
            <div class="title">Пароли</div>
            <div id="pwd_list">
                <?if (count($result["passwords"])) {?>
                    <? foreach ($result["passwords"] as $password) {?>
                        <div class="inp">
                            <span class="i_title"><?=$password[0]?></span>
                            <div class="line">
                                <div class="pwd_line">
                                    <input type="password" value="<?=htmlspecialchars($password[1])?>" readonly>
                                    <span class="show_pwd"></span>
                                </div>
                                <button class="copy_pwd">Копировать</button>
                                <span class="clear"></span>
                            </div>
                        </div>
                    <?}?>
                <?}?>
                <a href="#" class="add_new_pwd active">Добавить пароль</a>
                <hr>
            </div>
            <form id="add_pwd">
                <div class="inp">
                    <span class="i_title">Введите наименование</span>
                    <input type="text" name="name">
                </div>
                <div class="inp">
                    <span class="i_title">Введите пароль</span>
                    <div class="pwd_line">
                        <input type="password" name="password">
                        <div class="show_pwd"></div>
                    </div>

                </div>
                <a href="#" class="add_more">Добавить еще</a>
                <div class="line">
                    <button type="submit">Сохранить</button>
                    <a class="cancel" href="#">Отменить</a>
                </div>
            </form>
        </div>
    </div>
    <div class="right_cnt">
        <div class="docs">
            <div class="title">Документы</div>
            <div class="items">
                <?if (count($result["documents"])) {
                    setlocale(LC_ALL, 'ru_RU.utf8');
                    ?>
                    <? foreach ($result["documents"] as $document) {
                        $file_info = pathinfo($document["name"]);
                        ?>
                        <a href="<?=$document["src"]?>" data-id="<?=$document["id"]?>" class="item">
                            <div class="it"><div class="name"><?=$file_info["filename"]?></div><div class="remove"><div class="spin"></div></div></div>
                            <div class="attr"><?=$file_info["extension"]?>, <?=$document["size"]?></div>
                        </a>
                    <?}?>
                <?}?>
            </div>
            <div class="file">
                <input type="file" id="file">
                <label class="add_more" for="file"><?if (count($result["documents"])) {?>Добавить еще<?} else {?>Добавить<?}?></label>
            </div>
        </div>
    </div>
</div>