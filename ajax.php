<?
	
	if (isset($_GET['action']) && $_GET['action']=='send_form'){
		
		$form_name = "FORM NAME NO SET";
		$email = "EMAIL NO SET";
		$type = "TYPE NO SET";
		
		foreach ($_GET as $key => $val) {
			${$key} = $val;
		}
		
		$to  = "cv@antiresu.me";
		$from  = "noreply@antiresu.me" ;		
							
		$subject = "Заявка \r\n"; 
		
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
							
		if(mail($to, $subject, $emessage, $headers)) echo 'sended';
			else echo "error";
		
			}
?>