<?php
	$name = isset($_GET['i']) ? $_GET['i'] : 'gal_cover.jpg';
	$nameF = isset($_GET['f']) ? $_GET['f'] : 't';
	switch ($nameF){
		case 'l':
			$namePath = 'img/gal/' . $name;
			break;
		case 't':
			$namePath = 'img/t/' . $name;
			break;
		default:
			$namePath = 'img/gal/' . $name;
	}
	
	$fp = fopen($namePath, 'rb');
	header("Content-Type: image/png");
	header("Content-Length: " . filesize($namePath));
	
	fpassthru($fp);
	exit;
?>