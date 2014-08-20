<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Благодарность эксперту за консультацию");


$sum = 990;
?>
<div class="container">
<header>
<a class="login" href="/bitrix/admin/">Войти</a>
<div class="header-title"><a href="/">Правильное-резюме.онлайн</a></div>
<div class="header-subtitle">Твое резюме должно работать на тебя!</div>
</header>
<div class="once">

<table border="0" cellpadding="10" cellspacing="0">
<tr><td colspan="2">
Страница благодарности вашего персонального эксперта, за оказанную услугу. Укажите достойное вознаграждение. Мы вас не ограничиваем в размерах.
</td>
</tr><tr>
<td>
<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/donate.xml?account=41001134880985&quickpay=donate&payment-type-choice=on&default-sum=&targets=%D0%9F%D0%BE%D0%B4%D0%B4%D0%B5%D1%80%D0%B6%D0%BA%D0%B0+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B0+%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5.%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD&project-name=%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5.%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD&project-site=http%3A%2F%2F%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5.%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD&button-text=05&comment=on&hint=%D0%9D%D0%B0%D0%BF%D0%B8%D1%88%D0%B8%D1%82%D0%B5%2C+%D0%BF%D0%BE%D0%B6%D0%B0%D0%BB%D1%83%D0%B9%D1%81%D1%82%D0%B0%2C+%D0%B2%D0%B0%D1%88%D1%83+%D0%B1%D0%BB%D0%B0%D0%B3%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D1%81%D1%82%D1%8C+%D0%BE%D0%B1+%D0%BE%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D0%B9+%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B5.+%D0%9C%D1%8B+%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D0%B4%D0%B8%D0%BC+%D0%B5%D0%B5+HR-%D1%8D%D0%BA%D1%81%D0%BF%D0%B5%D1%80%D1%82%D1%83&fio=on&mail=on" width="541" height="178"></iframe>
</td>
<td class="text_content">
	Распределение&nbspвознаграждения:<br>
	69% - вашему HR-эксперту<br>
	21% - сервису<br>
	10% - благотворительность<br>
	
	
</td>
</tr></table>
</div>
</div>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>