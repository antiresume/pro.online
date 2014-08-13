<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Правильное-резюме.онлайн");
?>
<div class="container">
<header>
<a class="login" href="/bitrix/admin/">Войти</a>
<div class="header-title">Правильное-резюме.онлайн</div>
<div class="header-subtitle">Твое резюме должно работать на тебя!</div>
</header>
<div class="content clearfix">
<div class="happy">
<div class="cup"></div>
<div class="eyes"></div>
</div>
<div class="form">
<form onsubmit="return false" id='resume'>
<fieldset>
<div class="form-title">А у вас правильное резюме?</div>
						<?
							$num = rand(0,1);
							$str[0][0] = "paid";
							$str[0][1] = "";
							$str[1][0] = "free";
							$str[1][1] = "бесплатно";
							
													
						?>
						<input type="text" class="validate" name="email"  placeholder="Ваш E-mail" title='Введите Ваш E-mail'>
						<button class="send_button" rel='resume'>Проверить <?=$str[$num][1]?></button></fieldset>
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
</footer>
</div>
	<div id="modal_success">
		<div class="success">
			<div class="form_title">Ваша заявка удачно отправлена!</div>	
			<p>Наш эксперт свяжется с вами в ближайшее время.</p>
			<button class="close_fancy">Ок</button>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>