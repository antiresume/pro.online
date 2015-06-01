<?
	
 $sum = 950;//  Сумма к оплате.
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Правильное-резюме.онлайн</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="lp_style.css" />

<link rel="icon" type="image/png" href="lp_images/favicon.png" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="lp_fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="lp_fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script src="lp_js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="lp_js/jquery.countdown.js"></script>
<script type="text/javascript" src="lp_js/script.js"></script>
<script type="text/javascript" src="lp_js/accounting.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>

<script type="text/javascript">
		$(function() {
				$('#slider').carouFredSel({
					auto: true,
					
					prev: '#prev',
					next: '#next',
					mousewheel: false,
					direction	: "left",
					
				   scroll: {
				        items: 1,
				        duration: 500,
				        queue: true,
				        timeoutDuration: 3000,
				        easing: "linear",
				        pauseOnHover: "immediate-resume",
				        fx: "scroll"
				    },					
				    
					swipe: {
						onMouse: false,
						onTouch: false					}
				});
			
			});
				$(document).ready(function() {
					$(".button-green, .sogl, .button-yellow").fancybox({
						
						fitToView	: false,
						padding     : 0,
					
						
						autoSize	: true,
						closeClick	: false,
						openEffect	: 'none',
						closeEffect	: 'none',
					});
					
					
		            $('#form-resume').ajaxForm(function() { 
						alert("Форма успешно отправлена."); 
						}); 
						
			});
		
</script>
</head>

  <body>
<script type="text/javascript">
 
			 function randomNumber (m,n)
			{
			  m = parseInt(m);
			  n = parseInt(n);
			  return Math.floor( Math.random() * (n - m + 1) ) + m;
			}
 
			 function addZeros(n, needLength) {
			  needLength = needLength || 2;
			  n = String(n);
			  while (n.length < needLength) {
			    n = "0" + n;
			  }
			  return n
			}
 
 
			 function update(){
			 		var today = new Date;
                
                    jQuery.getJSON('lp_example.json?time='+randomNumber(999, 1000000), {}, function(json){
					    jQuery('.all_res').html('');
                        jQuery('.all_res').append(accounting.formatNumber(json.note.all_rezume, {	thousand : " "})   );
                        jQuery('.req_t').html('');
                        jQuery('.req_t').append(accounting.formatNumber(json.note.today_request, {		thousand : " "})    );
                        jQuery('.online').html('');
                        jQuery('.online').append(accounting.formatNumber(json.note.online, {		thousand : " "})     );
						jQuery('.all_quest').html('');
                        jQuery('.all_quest').append(accounting.formatNumber(json.note.all_questions, {		thousand : " "})    );
						jQuery('.time_update').html('');
                        jQuery('.time_update').append(addZeros(today.getHours())+":"+addZeros(today.getMinutes())+":"+addZeros(today.getSeconds())  );
                                            
                    });   
                    


                    
            }
                    
            jQuery(document).ready(	function (){
            	update();
	            var timerId = setInterval(function() {update()}, 10000);	// статистика обновляется каждые 15сек				
            }	

                
            );
            
        </script>   
		<div id="header">
			<div class="top">
				<div class="content">
				Сделайте <strong>Правильное резюме </strong> вместе с экспертом <br />
				<span>и получайте больше приглашений на собеседования</span>
				</div>
			</div>	
			<div class="banner">
				<div><center>
					<a href="https://ad.admitad.com/g/bc8d84135751d5bbe86015ae281b7a/" class="button-red">Создать резюме</a>
					<a href="#send-resume" class="button-yellow">Отправить резюме на проверку</a>
					<a href="#popup" class="button-green">Оставить отзыв</a>
					</center>
				</div>
			</div>
			<div id="numbers">
				<div class="content">
				  <div class="ni_block">
					<div class="number_item ">
						<div class="chislo online">н/д</div>
						cейчас <br />онлайн
					</div>
					<div class="number_item">
						<div class="chislo req_t">н/д</div>
						заявок <br />сегодня
					</div>
					<div class="number_item ni_last">
						<div class="chislo all_res">н/д</div>
						резюме <br />создано
					</div>
				  </div>
					<div class="ni_descr">обновлено <span class="time_update">н/д</span></div>
					
					
				</div>
			</div>
			
				
			
		</div>

		<div class="title">
			<div class="content">
				Мы поможем вам, если вас беспокоят следующие вопросы:
			</div>
		</div>
		<div id="voprosu">
			<div class="content">
				<div class="voprosu_icon">
					<img src="lp_images/pencil.png" alt="" />
				</div>
				<div class="voprosu_text">
				1. Почему мало откликов на ваше резюме?<br />
				2. Подходят ли ваши знания и опыт желаемой позиции?<br />
				3. Почему не приглашают на собеседования?<br />
				4. Как доработать резюме, чтобы взяли на должность руководителя?<br />
				5. Готово ли ваше резюме для отправки работодателю?<br />
				6. Что писать в сопроводительном письме?<br />
				7. Как быстрее найти работу?

				</div>
			</div>
		</div>


		<div class="title">
			<div class="content">
				Почему мы?

			</div>
		</div>
		<div id="who">
			<div class="content">
				<div class="man">
					<img src="lp_images/man.jpg" alt="" />
				</div>
				<div class="who_text">

						<span class="name_man">1. </span>Нет стоимости работ - все услуги <strong>бесплатны</strong>!<br />
						<span class="name_man">2. </span>С вами работают только профессионалы<br />
						<span class="name_man">3. </span>Вы сами определяете размер благодарности :)<br />
						<span class="name_man">4. </span>С радостью ждем отзывов о нашей работе<br />
						<span class="name_man">5. </span>Нам не все равно!<br />

				</div>
			</div>
		</div>
		






		<div class="title">
			<div class="content">
				Отзывы наших клиентов

			</div>
		</div>
		<div id="feed">
			<div class="content">
				<ul id="slider">
				<!-- отзыв 1 -->
				   <li>
						<div class="f_ava">
							<img src="lp_images/feed_ava0.jpg" alt="" />
						</div>
			
						<div class="comment">
							<div class="comm_title">
							Создав правильное резюме с экспертом я понял, как надо искать работу
							</div>
							Отликаюсь на 10-15 вакансий в день, очень часто мое резюме не было просмотрено. Приглашения были на неинтересные вакансии. Создав правильное резюме с экспертом мне объяснили как надо искать работу и я полностью переделал свое резюме - результат: нашел очень привлекательную работу за три дня!
							<div class="comm_avtor">
							Владимир Твердов <br />
							(Москва, Руководитель проектов)
							</div>
						</div>
											
				   </li>
				   <!-- отзыв 2 -->
				    <li>
						<div class="f_ava">
							<img src="lp_images/feed_ava1.jpg" alt="" />
						</div>
						
						<div class="comment">
							<div class="comm_title">
							Я в шоке, какое резюме у нас получилось! 
							</div>
							От моего старого резюме остались только контакты! Меня теперь с правильным резюме не продавать в работу, а на выставку и всем показывать. Теперь я понимаю, что с моим старым резюме можно было идти только в дворники и почему я вообще не получал приглашений на собеседования.
							<div class="comm_avtor">
							Максим Бедько <br />
							(Москва, Генеральный директор)
							</div>
						</div>
						
				   </li>
				   <!-- отзыв 3 -->
				      <li>
						<div class="f_ava">
							<img src="lp_images/feed_ava2.jpg" alt="" />
						</div>
						
						<div class="comment">
							<div class="comm_title">
							Количество приглашений на немного стало больше, а вот их качество изменилось.
							</div>
							После того, как я написала свое правильное резюме в соответствии с советами эксперта, количество приглашений на немного стало больше, но вот их качество значительно изменилось: уровень задач и масштаб проектов значительно выросли. Сейчас я успешно работаю в серьезной западной компании.
							<div class="comm_avtor">
							Ирина Яценко <br />
							(Санкт-Петербург, Исполнительный директор)
							</div>
						</div>
						
				   </li>
				   <!-- отзыв 3 -->
				      <li>
						<div class="f_ava">
							<img src="lp_images/feed_ava3.jpg" alt="" />
						</div>
						
						<div class="comment">
							<div class="comm_title">
							Искренне благодарю Вас за ряд ценных советов
							</div>
							Мария, искренне благодарю Вас за ряд ценных советов. Постараюсь ими воспользоваться и надеюсь, что это позволит более  продуктивно вести поиск.
							<div class="comm_avtor">
							Борис Воропаев <br />
							(Новосибирск, Коммерческий директор)
							</div>
						</div>
						
				   </li>
				</ul>
				<a id="prev" class="prev" href="#" ></a>
				<a id="next" class="next" href="#" ></a>
			</div>
		</div>		
		<div class="title">
			<div class="content">
				Сколько стоит?
			</div>
		</div>
		<div id="voprosu">
			<div class="content">
				<div class="voprosu_icon">
					<img src="lp_images/recruter.png" alt="" />
				</div>
				<div class="voprosu_text">
					<b>Стоимость наших услуг - Бесплатно.</b>
					<br>
					
					Мы работаем за добровольные вознаграждения от наших клиентов. <br>
					Если вам понравилась наша работа - оцените ее по достоинству. 			
					
					
				</div>
			</div>
		</div>
=
<?if(0){?>		<div class="title">
			<div class="content">
				Мы гарантируем увеличение просмотров и приглашений
			</div>
		</div>
		<div id="block1">
				<div class="content">
					<div class="b1_img b1i_first">
						<img src="lp_images/tr1.jpg" alt="" />
					</div>
					<div class="b1_img">
						<img src="lp_images/tr2.jpg" alt="" />
					</div>
					<div class="b1_img b1i_last">
						<img src="lp_images/tr3.jpg" alt="" />
					</div>
				</div>
					
		</div>
<?}?>
		<div class="title">
			<div class="content">
				Как это работает?
			</div>
		</div>
		<div id="work">
			<div class="content">
				<div class="work_item">
					<img src="lp_images/work1.png" alt="" />
					<div class="work_text">
						<b>1.</b> Создаете<br />резюме <br />
					</div>
				</div>
				<div class="work_item">
					<img src="lp_images/work4.png" alt="" />
					<div class="work_text">
						<b>2.</b> Проходите<br />модерацию<br />
					</div>
				</div>
				<div class="work_item">
					<img src="lp_images/work2.png" alt="" />
					<div class="work_text">
						<b>З.</b> Отправляете<br />резюме на проверку<br />эксперту
					</div>
				</div>
				<div class="work_item">
					<img src="lp_images/work3.png" alt="" />
					<div class="work_text">
						<b>4.</b> Получаете больше<br />приглашений на<br />собеседования
					</div>
				</div>
			</div>
		</div>

		<div class="title">
			<div class="content">
				Как создать резюме?
			</div>
		</div>
		<div id="who">
			<div class="content text-usual">		
					<b>1. Перейти по кнопке <a href="https://ad.admitad.com/g/bc8d84135751d5bbe86015ae281b7a/" class="button-red">Создать резюме</a> на портале job.ru</b><br><br>
					<small>мы принимаем только новые резюме и только в формате job.ru </small><br><br>
					
					<b>2. Заполнить все поля корректными данными</b> <br>
					<small>Вносите максимум данных - так советы эксперта будут более ценными именно для вас</small><br><br>
					
					<b>3. Создать НОВОГО пользователя </b><br> 
					<small>Особенно обратите внимание на email и  контактный телефон - они должны быть настоящими</small><br><br>
					
					<b>4. В настройках видимости указать "ВСЕМ" </b><br> 
					<small>После публикации резюме, у вас будет прямая ссылка. Эту ссылку необходимо будет вставить в форму проверки резюме</small><br><br>
					
					<b>5. Опубликовать резюме </b><br> 
					<small>После нажатии кнопки "опубликовать", нужно обязательно прости модерацию резюме.</small><br><br>
					
					
			</div>
		</div>

		<div class="title">
			<div class="content">
				Как пройти модерацию?
			</div>
		</div>

		<div id="who">
			<div class="content text-usual">
					<b>1. Дождаться письма на указанный в резюме email </b> <br>
					<small>Вам придет письмо от портала Job.ru</small><br><br>


					<b>2. Перейти по указанной в нем ссылке по активации аккаунта </b> <br>
					<small>Данное действие необходимо, чтобы подтвердить правильность указания email</small><br><br>

					<b>3. Получить подтверждающее письмо, что резюме разрешено к публикации </b> <br>
					<small>Перейдите по указанной ссылке "посмотреть резюме" из письма</small><br><br>

			</div>
		</div>
		

		<div class="title">
			<div class="content">
				Как отправить на проверку резюме?
			</div>
		</div>

		<div id="who">
			<div class="content text-usual">
					<b>1. Зайдите на страницу своего резюме на Job.ru </b> <br>
					<small>Ссылка на него есть в письме с темой "JOB.RU: Обновленное резюме опубликовано на сайте"</small><br><br>

					<b>2. Нажмите "получить ссылку" </b> <br>
					<small>Данная ссылка доступна, если "настроена видимость" резюме - "всем"</small><br><br>

					<b>3. Скопируйте ссылку на резюме </b> <br>
					<small>Выделив ее мышкой</small><br><br>

					<b>4. Нажмите на кнопку  <a href="#send-resume" class="button-yellow">Отправить резюме на проверку</a></b> <br><br>
					
					<b>5. Заполните все поля и нажмите кнопку "отправить"</b><br><br>
					
					<b>6. Дождитесь ответа эксперта и начните выполнять его рекомендации </b>


			</div>
		</div>






		<div class="title">
			<div class="content">
				Как оставить отзыв?
			</div>
		</div>


<?if(0){?>

		<div class="title">
			<div class="content">
				Кто мы?
			</div>
		</div>
		<div id="who">
			<div class="content">
				<div class="man">
					<img src="lp_images/man.jpg" alt="" />
				</div>
				<div class="who_text">
					<div class="name_man">
						Владимир Якуба
						<span>(партнер сервиса)</span>
					</div>
						<br />
						32 года. 12 лет в сфере подбора и оценки персонала. <br /><br />

						Один из лучших хедхантеров России: ТОП 7 и ТОП 4 по версии журналов «Управление персоналом» и «ПРОФИЛЬ» 2012. <br /><br />

						Ведущий ТВ программы «Кадры решают», участник реалити-шоу «Кандидат с Владимиром Потаниным» на канале ТНТ. <br /><br />

						 Постоянный эксперт в передачах федеральных <br />
						телеканалов и на страницах деловых изданий. 
					
				</div>
			</div>
		</div>

		<div id="experts">
			<div class="content">
				<div class="exp_title">
				Некоторые из наших экспертов:
				</div>
				<div class="exp">
					<img src="lp_images/ava1.jpg" alt="" />
					Валетина Иванова
				</div>
				<div class="exp">
					<img src="lp_images/ava2.jpg" alt="" />
					Мария Болотникова
				</div>
				<div class="exp">
					<img src="lp_images/ava3.jpg" alt="" />
					Анастасия Дробышева
				</div>
			</div>
		</div>
<?}?>

		<div class="title">
			<div class="content">
				Наши партнеры <span>(кадровые агентства и интернет-порталы)</span>

			</div>
		</div>
		<div id="partners">
			<div class="content">
				<div class="partner">
					
						<img src="lp_images/partner1.png" alt="КА Якуба" title="КА Якуба" />
				</div>
				<div class="partner">
						<img src="lp_images/partner2.png" alt="КА Retail Personal" title="КА Retail Personal" />
				</div>
				<div class="partner">
						<img src="lp_images/partner3.png" alt="job портал" title="job портал" />
				</div>
				
			<?if(0){?>
				<div class="partner">
					<a  href="" title="">
						<img src="lp_images/partner_img.png" alt="" />
					</a>
				</div>
			<?}?>				
			</div>
		</div>



<?if(0){?>
		<div class="title">
			<div class="content">
				Не уверены в своих силах и желаете больше гарантий?
			</div>
		</div>
		<div id="nowork">
			<div class="content">
				<div class="nw_item">
				   <div class="nw_img"><img src="lp_images/rez1.png" alt="" /></div>
					<div class="nw_text">
				       <span>Гарантия приглашения на собеседования</span><br />
					   <br /><br />
					    - 30 минут онлайн общения с экспертом<br />
						- <b>написание проактивного резюме с нуля</b><br />
						- помощь в поиске вакансий<br />
						- помощь в откликах на вакансии<br />
						- 1 месяц email консультаций
					</div>
					
				</div>
				<div class="nw_item nw_right">
				   <div class="nw_img"><img src="lp_images/rez2.png" alt="" /></div>
					<div class="nw_text">
				       <span>Гарантия прохождения дальше первого собеседования</span><br />
					   <br /><br />
					   - 60 минут онлайн общения с экспертом<br />
						- получение правдивой обратной связи<br />
						- обучение правильным словам на собеседовании<br />
						- <b>возможность отрепетировать самопрезентацию</b><br />
						- 1 месяц email консультаций
					</div>
					
				</div>
			</div>
		</div>


		<div id="footer">
			<div class="content">
				<a class="popup" href="#popup" title="">
							ИСПРАВИТЬ <span>А</span>ШИ<span>П</span>КИ
				</a>
				<div class="f_text">в резюме вместе с экспертом прямо сейчас			</div>
		</div>
<?}?>
		<div id="bottom">
			<div class="content">
				© 2014, Правильное-резюме.онлайн
				<a class="sogl" href="#sogl" title="">Соглашение об обработке персональной информации</a> 
			</div>
		</div>
		
	<div id="popup" name="popup">
		<div class="popup_title">
			Оставить отзыв и поддержать проект
		</div>


<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/donate.xml?account=41001134880985&quickpay=donate&payment-type-choice=on&default-sum=210&targets=%D0%9F%D0%BE%D0%B4%D0%B4%D0%B5%D1%80%D0%B6%D0%BA%D0%B0+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B0&target-visibility=on&project-name=%D0%90%D0%BD%D1%82%D0%B8%D0%A0%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5&project-site=http%3A%2F%2Fantiresu.me&button-text=05&comment=on&hint=%D0%9D%D0%B0%D0%BF%D0%B8%D1%88%D0%B8%D1%82%D0%B5+%D1%81%D0%B2%D0%BE%D0%B9+%D0%BE%D1%82%D0%B7%D1%8B%D0%B2+%D0%B8+%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D1%8E+%D1%8D%D0%BA%D1%81%D0%BF%D0%B5%D1%80%D1%82%D0%B0&fio=on&mail=on&successURL=http%3A%2F%2Fantiresu.me" width="510" height="201"></iframe>
		<div class="clear"></div>
	</div>
	
	
	<div id="send-resume" class="send-resume">
		<div class="send-resume-title">Отправка резюме на проверку</div>
		<form class="form" id="form-resume" name="form-resume" action="send-resume.php" method="post">
			<input type="text" name="url" placeholder="прямая ссылка на резюме Job.ru">
			<button type="submit">отправить</button>
		</form>
	</div>
	
	<div id="sogl">

<span class="text_title">Соглашение об обработке персональных данных</span>
<br><br>
<span class="text_content">
Данное соглашение об обработке персональных данных разработано в соответствии с законодательством Российской Федерации.<br>
<br>
Все граждане заполнившие сведения, составляющие персональные данные на сайте http://antiresu.me/ или на любой его странице, а также разместившие иную информацию обозначенными действиями, подтверждают свое согласие на :<br>
<br>
- подписку на электронные почтовые рассылки с информационными и рекламными целями,<br>
- обработку персональных данных,<br>
- передачу персональных данных оператору по их обработке.<br>
<br>
Под персональными данными Гражданина понимается:<br>
<br>
- общая информация (Ф.И.О);<br>
- электронная почта (e-mail);<br>
- номер телефона;<br>
- компания и должность.<br>
<br>
Лица направляют свои персональные данные оператору в целях получения доступа к информационным материалам на сайте http://antiresu.me/ или на любой его страницах, а также для получения доступа к консультациям.<br>
<br>
Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, уничтожение.<br>
<br>
Гражданин гарантирует:<br>
<br>
информация, им предоставленная, является полной, точной и достоверной;<br>
при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; <br>
вся предоставленная информация заполнена Гражданина в отношении себя лично.<br>
</span>	</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter25865171 = new Ya.Metrika({id:25865171,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/25865171" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55676335-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>