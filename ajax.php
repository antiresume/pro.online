<?
	
	if (isset($_GET['action']) && $_GET['action']=='send_form'){
		foreach ($_GET as $key => $val) {
			${$key} = $val;
		}
		
		$to  = "cv@antiresu.me";
		$from  = "noreply@antiresu.me" ;		
							
		$subject = $email." \r\n"; 
		
		$emessage = '
		<html>
			<head>
			<title>'.$form_name.'</title>
			</head>
		<body>
			<div style="width: 660px;">
				'.$type.'
			</div>
		</body>
		</html>';							
		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: ".$from."\r\n";
							
		mail($to, $subject, $emessage, $headers);
		
		echo 'sended';
	}
?>