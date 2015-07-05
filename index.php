<?php
/*判断访问设备定义全局变量*/
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
	if(strpos($userAgent,"iPhone") || strpos($userAgent,"iPad") || strpos($userAgent,"iPod") || strpos($userAgent,"Android")){
		define('WAP', 1);
	}

	/*controller*/
	if (WAP == 1) {
		$this->display('mobile.html');
	}
?>