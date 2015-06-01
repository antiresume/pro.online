<?
//	http://www.job.ru/seeker/mycv/?cvhash=481ff0fc17f643039b60e1e534db0310

	if(!isset($_POST['url'])) {
		print 0; die;
		}

	$sURL = $_POST['url'];

	preg_match('/^http:\/\/www\.job\.ru\/seeker\/mycv\/\?cvhash=([\w\d]{32})$/', $sURL, $matches);
	
	if(!isset($matches[1])) {
		mail("cv@antiresu.me", "ХЗ что", "".$sURL."");
		print 0;
		die;
	}
	
	mail("cv@antiresu.me", "новое резюме", "".$sURL."");
	
	print 1;	
		
?>