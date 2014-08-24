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
<span class="login" href="#">вход</span>
<div class="header-title">Правильное-резюме.онлайн</div>
<div class="header-subtitle">Правильное резюме интересно работодателю!</div>
</header>
<div class="content clearfix">
<div class="happy">
<div class="cup"></div>
<div class="eyes"></div>
</div>
<div id="form2" style="display:none;"   class="form">
Ваша заявка получена. <br>
<br> Для&nbspначала&nbspработы&nbspHR-эксперта&nbsp<br>
подтвердите ваш email . Спасибо.<br>

</div>
<div id="form1" class="form">
<form onsubmit="return false" id='resume'>
<fieldset>

						<div class="form-title">Знаете какие ошибки у вас в резюме?</div>
						<input type="text" class="validate" name="email"  placeholder="Ваш E-mail" title='Введите Ваш E-mail'>
						<button class="send_button" onclick="yaCounter25865171.reachGoal('email','<?=$str[$num][0]?>'); return true;" rel='resume'> Спросить у HR-эксперта</button></fieldset>
											<input type="hidden"  name="form_name" value="А у вас правильное резюме?">
											<input type="hidden" name="type" value="<?=$str[$num][0]?>">
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
<footer>
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
<div class="copy"><br><br><br><br><a href="/privacy.php" class="copy">Соглашение об обработке персональной информации</a></div>
</footer>
<div id="donate" class="donate">
	<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=41001134880985&quickpay=small&any-card-payment-type=on&button-text=01&button-size=l&button-color=white&targets=%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D0%B8&default-sum=<?=$str[$num][0]?>&fio=on&mail=on&phone=on" width="259" height="54"></iframe>
	
</div>
</div>
	<div id="modal_success">
		<div class="success">
			<div class="form_title">Вам письмо! Проверьте почтовый ящик!</div>	
			<p>Мы отправили Вам письмо с дальнейшими инструкциями.<br>
			<br>
				Если его нет, то проверьте, пожалуйста, вкладку "Спам" или<br>
				напишите письмо на email <a href="mailto:crm@antiresu.me">crm@antiresu.me</a> сами.<br>
				<br>
				Спасибо. Pады быть Вам полезными!
			</p>
			<button class="close_fancy">Ок</button>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>