<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Правильное-резюме.онлайн");
?>
<div class="container">
<header>
<a class="login" href="/bitrix/admin/">Войти</a>
<div class="header-title">Правильное-резюме.онлайн</div>
<div class="header-subtitle">Правильное резюме продает!</div>
</header>
<div class="content clearfix">
<div class="happy">
<div class="cup"></div>
<div class="eyes"></div>
</div>
<div class="form">
<form onsubmit="return false" id='resume'>
<fieldset>

						<?
							$num = rand(0,1);
							$str[0][0] = "hour";
							$str[0][1] = "ЧАС";
							$str[1][0] = "day";
							$str[1][1] = "СУТКИ";

/*
							$str[0][0] = "190";
							$str[0][1] = "за 190 руб.";
							
							$str[1][0] = "290";
							$str[1][1] = "за 290 руб.";
							
							$str[2][0] = "390";
							$str[2][1] = "за 390 руб.";
							
							$str[3][0] = "490";
							$str[3][1] = "за 490 руб.";
							
							$str[4][0] = "90";
							$str[4][1] = "за 90 руб.";
							
							$str[5][0] = "free";
							$str[5][1] = "бесплатно";
*/							
													
						?>
						<div class="form-title">ЭКСПРЕСС-ОБЗОР БЕСПЛАТНО.</div>
						<input type="text" class="validate" name="email"  placeholder="Ваш E-mail" title='Введите Ваш E-mail'>
						<button class="send_button" onclick="yaCounter25865171.reachGoal('email','<?=$str[$num][0]?>'); return true;" rel='resume'> Показать HR-эксперту</button></fieldset>
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
<div class="footer-title">Мы рекомендуем <span>правильное резюме</span> для сайтов:</div>
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
<div class="copy"><br><br><br><br><a href="/.php" class="copy">Соглашение об обработке персональной информации</a></div>
</footer>
</div>
	<div id="modal_success">
		<div class="success">
			<div class="form_title">Вам письмо! Проверьте почтовый ящик!</div>	
			<p>Мы отправили Вам письмо с дальнейшими инструкциями.<br>
			<br>
				Если его нет, то проверьте, пожалуйста, вкладку "Спам" или<br>
				напишите письмо на email <a href="mailto:cv@antiresu.me">cv@antiresu.me</a> сами.<br>
				<br>
				Спасибо. Pады быть Вам полезными!
			</p>
			<button class="close_fancy">Ок</button>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>