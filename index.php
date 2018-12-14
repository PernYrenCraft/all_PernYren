<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/test/');
	exit;
?>
ไม่สามารถเปิดหน้าเว็ปนี้ได้ หรือ ปายทางไม่สมประกอบ
