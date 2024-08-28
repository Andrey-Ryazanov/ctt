<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if ($USER->IsAuthorized() && !$USER->IsAdmin()) {
    LocalRedirect("/exhibitors/lk/");
}
?>
<form id="login">
    <div class="inp">
        <span>Введите логин</span>
        <input type="text" name="login">
    </div>
    <div class="inp">
        <span>Введите пароль</span>
        <input type="password" name="password">
    </div>
    <div class="line">
        <a class="forget" href="#">Вспомнить пароль</a>
        <div class="remember">
            <input type="checkbox" id="remember">
            <label for="remember">Запомнить меня</label>
        </div>
    </div>
    <button type="submit">Войти</button>
</form>