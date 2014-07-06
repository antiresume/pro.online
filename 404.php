<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
<div class="container">
<header>
<a class="login" href="/bitrix/admin/">Войти</a>
<div class="header-title"><a href="/">Правильное-резюме.онлайн</a></div>
<div class="header-subtitle">Твое резюме должно работать на тебя!</div>
</header>
<div class="once">К сожалению, страница не найдена</div>
</div>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>