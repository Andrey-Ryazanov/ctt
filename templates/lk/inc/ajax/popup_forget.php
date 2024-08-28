<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>
<div class="popup">
    <div class="inner">
        <div class="title">Восстановление доступа</div>
        <form id="refresh_pwd" data->
            <div class="inp">
                <div class="s_title">Введите логин/email</div>
                <input type="text" name="email">
                <div class="errortext f dis">Введите корректный email/логин</div>
            </div>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>