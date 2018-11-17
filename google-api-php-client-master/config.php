<?php
	session_start();
	require_once "/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("762133818981-vi9ugt3cb45qp79e8ls1vovn42e9e29o.apps.googleusercontent.com");
	$gClient->setClientSecret("61LfAhPNzFI7Mmt6uL59zZqR");
	$gClient->setApplicationName("CPI Login");
	$gClient->setRedirectUri("http://localhost/project1/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
