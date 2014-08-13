<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Resume</title>
	<link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" media="screen" >
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,latin-ext,cyrillic-ext,cyrillic">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext,cyrillic,cyrillic-ext">
	
	<script src="js/jquery-1.7.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="js/tooltipster-master/css/tooltipster.css" />
	<link rel="stylesheet" type="text/css" href="js/tooltipster-master/css/themes/tooltipster-shadow.css" />
	<script type="text/javascript" src="js/tooltipster-master/js/jquery.tooltipster.js"></script>
	<!--<script src="js/jquery.placeholder.js"></script>-->
	<script src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script src="js/common.js"></script>

	
	
</head>
<body>
	<div class="container">
		<header>
			<a class="login" href="#">Войти</a>		
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
						<input type="text" class="validate" name="text"  placeholder="Ваш E-mail" title='Введите Ваш E-mail'>
						<button class="send_button" rel='resume'>Проверить бесплатно</button>
					</fieldset>
					<input type="hidden"  name="form_name" value="А у вас правильное резюме?">
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
			<p>Наш менеджер свяжется с вами в ближайшее время</p>
			<button class="close_fancy">Ок</button>
		</div>
	</div>
</body>
</html>