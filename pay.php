<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Форма оплаты услуг");


$sum = 990;
?>
<div class="container">
<header>
<span class="login" href="/bitrix/admin/"><?if(0){?>Войти<?}?></span>
<div class="header-title"><a href="/">Правильное-резюме.онлайн</a></div>
<div class="header-subtitle">Твое резюме должно работать на тебя!</div>
</header>
<div class="once">

<table border="0" cellpadding="10" cellspacing="0">
<tr><td colspan="2">
Страница оплаты услуг вашего персонального эксперта.  <br> </td>
</tr><tr>
<td>
<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=41001134880985&quickpay=shop&payment-type-choice=on&writer=buyer&targets-hint=%D0%A3%D0%BA%D0%B0%D0%B6%D0%B8%D1%82%D0%B5+%D0%BD%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B8&default-sum=&button-text=01&comment=on&hint=&fio=on&mail=on&phone=on&successURL=" width="450" height="264"></iframe>
</td>
<td valign="top" class="text_content">Укажите название услуги и стоимость.</td>
</tr></table>
</div>
</div>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>