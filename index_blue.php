<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Правильное-резюме.онлайн");
?>

<?
	$num = 1;//rand(0,2);
	$str[0][0] = "21";
	$str[0][1] = "21 рубль";
	
	$str[1][0] = "50";
	$str[1][1] = "50 рублей";
	
	$str[2][0] = "90";
	$str[2][1] = "90 рублей";
	

							
?>

<div class="container">
<header>
<span class="login" href="#">&nbsp</span>
<div class="header-title"><a href="/">Правильное-резюме.онлайн</a></div>
<? //<div class="header-subtitle">Ваше преимущество при поиске работы!</div>?>
<div class="header-subtitle">Только для работодателей!</div>
</header>
<div class="content clearfix">
<div class="happy">
<div class="cup"></div>
<div class="eyes"></div>
</div>
<div id="form2" style="display:none;"   class="form"><noindex>
<br><br>Спасибо за интерес к нашему проекту. <br>
<br> Ожидайте, пожалуйста, нашего email. <br><br>Спасибо.<br>
</noindex>
</div>
<div id="form1" class="form">
<form onsubmit="return false" id='resume'>
<fieldset>
						<input type="hidden"  name="form_name" value="Обратный звонок">

						<? if(0){?><div class="form-title">Знаете какие ошибки у вас в резюме?</div><?}?>
						<input type="text" class="validate" name="name"  placeholder="Представьтесь" title='Укажите ваше имя'>
						<input type="text" class="validate" name="email"  placeholder="Электронная почта" title='Введите email'>
						<button class="send_button" onclick="yaCounter25865171.reachGoal('email','<?=$str[$num][0]?>'); return true;" rel='resume'>Начать бесплатно</button></fieldset>
</form>

</div>
<div class="sad">
<div class="eyes"></div>
<div class="drops"></div>
<div class="questionmrk img1"></div>
<div class="questionmrk img2"></div>
<div class="questionmrk img3"></div>
<div class="questionmrk img4"></div>
<div class="questionmrk img5"></div>
<div class="questionmrk img6"></div>
</div>
</div>
<?if(0){?><div><br>Мы вам поможем, если вас беспокоят вопросы:<br><br>
<div class="text_content">
1. Почему мало откликов на ваше резюме? <br>
2. Насколько ваш опыт и знания подходят желаемой позиции?<br>
3. Как повысить конкурентоспособность вашего резюме?<br>
4. На какую зарплату можно рассчитывать?<br>
5. Почему вас не приглашают на собеседования?<br>
6. Что писать в резюме, чтобы вас пригласили на должность руководителя?<br>
7. Как быстрее найти работу?<br>
8. Что писать в сопроводительном письме?<br>
9. Что в вашем резюме выглядит непривлекательно?<br>
10. Готово ли ваше резюме для отправки работодателю?<br>
</div>

<br><br><br><br>
</div><?}?>
<footer>

<?if(0){?>
<div class="footer-title">Мы продвигаем ваш профиль с <span>правильным резюме</span> на сайтах:</div>
<div class="links">
<div class="link-wrap1">
<div class="link1" href="http://hh.ru" target="_blank"></div>
</div>
<div class="link-wrap2">
<div class="link2" href="http://superjob.ru" target="_blank"></div>
</div>
<div class="link-wrap3">
<div class="link3" href="http://job.ru" target="_blank"></div>
</div>
<div class="link-wrap4">
<div class="link4" href="http://rabota.ru" target="_blank"></div>
</div>
<div class="link-wrap5">
<div class="link5" href="http://career.ru" target="_blank"></div>
</div>
</div>
<?}?>
<div class="copy"><br><br><br><br><a href="/privacy.php" class="copy">Соглашение об обработке персональной информации</a></div>
</footer>
	
</div>
</div>
	<div id="modal_success">
		<div class="success"><noindex>
			<div class="form_title">Заявка принята!</div>	
			<p>Ожидайте, пожалуйста, нашего ответа на указанный email.<br>
<?if(0){?>			<br>
				Если его нет, то проверьте, пожалуйста, вкладку "Спам" или<br>
				напишите письмо на email <a href="mailto:crm@antiresu.me">crm@antiresu.me</a> сами.<br>
<?}?>
				<br>
				Спасибо за интерес к проекту!
			</p>
			<button class="close_fancy">Ок</button>
			</noindex>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>