<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Оплата экспертизы резюме");


$sum = 190;
?>
<div class="container">
<header>
<a class="login" href="/bitrix/admin/">Войти</a>
<div class="header-title"><a href="/">Правильное-резюме.онлайн</a></div>
<div class="header-subtitle">Твое резюме должно работать на тебя!</div>
</header>
<div class="once">

<table border="0" cellpadding="21" cellspacing="0">
<tr><td colspan="2">
Стоимость экспертизы резюме: <b><?=$sum?></b> руб.
</td>
<td rowspan="3"><img src="/images/garant.png"></td>
</tr>
<tr>
<td>
<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=41001134880985&quickpay=small&yamoney-payment-type=on&button-text=01&button-size=m&button-color=white&targets=%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5.%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD+-+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8F&default-sum=<?=$sum?>&fio=on&mail=on" width="185" height="42"></iframe>
</td>
<td><span class="text">Яндекс.Деньги</span></td></tr>
<tr><td>
	
<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=41001134880985&quickpay=small&any-card-payment-type=on&button-text=01&button-size=m&button-color=white&targets=%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5.%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD+-+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8F&default-sum=<?=$sum?>&fio=on&mail=on" width="185" height="42"></iframe>

</td><td width="80%"><span class="text">Пластиковые карточки</span></td></tr>
<tr><td colspan="3">
	
Ответ за 24 часа + 7 дней консультаций по email

	
</td></tr></table>
</div>
</div>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>