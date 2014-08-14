<?
	
	if (isset($_GET['action']) && $_GET['action']=='send_form'){
		
		$form_name = "FORM NAME NO SET";
		$email = "EMAIL NO SET";
		$type = "TYPE NO SET";
		
		$pay["free"]  = 0;
		$pay[90]  = "a";
		$pay[190] = "b";
		$pay[290] = "c";
		$pay[390] = "d";
		$pay[490] = "e";
		
		foreach ($_GET as $key => $val) {
			${$key} = $val;
		}
		
		$to  = "cv@antiresu.me";
		$from  = "noreply@antiresu.me" ;		
							
		$subject = "Заявка ".date("Y.m.d H:i:s")." ".$type."\r\n"; 
		
		$emessage = '
		<html>
			<head>
			<title>'.$form_name.'</title>
			</head>
		<body>
			<div style="width: 660px;">
				'.$email.'<br>'.$type.'
			</div>
		</body>
		</html>';							
		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: ".$from."\r\n";
							
		if(mail($to, $subject, $emessage, $headers)) echo 'sended to CV <br>';
			else echo "error <br>";
		
		
		
		
		
		
		//send to CRM
		$to  = "crm@antiresu.me";
		$from  = $email ;		
							
		$subject_crm = "Заявка ".date("Y.m.d H:i:s")." ".$type."\r\n"; 
		
		$emessage_crm = '
		<html>
			<head>
			<title>'.$form_name.'</title>
			</head>
		<body>
			<div style="width: 660px;">
				'.$email.'<br>'.$type.'
			</div>
		</body>
		</html>';							
		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: ".$from."\r\n";
		
		if(mail($to, $subject, $emessage, $headers)) echo 'sended to CRM';
			else echo "error";
	
	
		//send to Client

				$to  = $email;
				$from  =  "crm@antiresu.me";		

				$headers  = "Content-type: text/html; charset=utf-8 \r\n";
				$headers .= "From: ".$from."\r\n";

		if($type == "free") {
		
									
				$subject_crm = "Правильное резюме (".date("Y.m.d").") \r\n"; 
				
				$emessage_crm = '
				<html>
					<head>
					<title>Правильное Резюме</title>
					</head>
				<body>
					<div style="width: 660px;">
						Добрый день!<br>
						<br>
						Меня зовут Роман, я эксперт сервиса Правильное-Резюме.онлайн.<br>
						<br>
						У Вас уже есть резюме? Пришлите мне его, пожалуйста, на этот адрес, либо вложением, либо ссылкой.<br>
						<br>
						С наилучшими пожеланиями,<br>
						Эксперт сервиса Правильное-Резюме.онлайн<br>
						Роман Петров.<br>
					</div>
				</body>
				</html>';							
				
		
			}else {
				$subject_crm = "Заказ экспертизы от ".date("Y.m.d")." \r\n"; 
				
				$emessage_crm = '
				<html>
					<head>
					<title>Заказ экспертизы</title>
					</head>
				<body>
					<div style="width: 660px;">
						Добрый день!<br>
						<br>
						Меня зовут Роман, я эксперт сервиса Правильное-Резюме.онлайн.<br>
						<br>
						Для того, чтобы я мог сделать экспертизу резюме Вам необходимо:<br>
						1. Сделать оплату по ссылке <a href="http://правильное-резюме.онлайн/exp'.$pay[$type].'.php">http://правильное-резюме.онлайн/exp'.$pay[$type].'.php</a><br>
						2. Прислать вложением свое резюме на адрес cv@antiresu.me<br>
						3. Описать задачу, которую нужно нам решить: например - не приглашают на собеседования или как показать свою ценность и запросить большую зарплату<br>
						<br>
						С наилучшими пожеланиями,<br>
						Эксперт сервиса Правильное-Резюме.онлайн<br>
						Роман Петров.<br>
					</div>
				</body>
				</html>';							
				
			
			}
				if(mail($to, $subject, $emessage, $headers)) echo 'sended to client';
					else echo "error";


	}
			
?>