<?php
	require_once('function.php');
	$controllerAllow = array("test","index");
	$methodAllow = array("test","index","show");
	$controller = in_array($_GET['controller'], $controllerAllow)? daddslashes($_GET['controller']) : 'index';
	$method = in_array($_GET['method'], $methodAllow) ?  daddslashes($_GET['method']) : "index";
	C($controller,$method);
?>