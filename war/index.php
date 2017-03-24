<?php
	require_once("GoodManClass.php");
	require_once("BadManClass.php");
	require_once("WarClass.php");

	header("Content-type:text/html;charset=utf-8");

	$goodman = new GoodMan("李云龙",1000,100);
	$badman = new BadMan("楚云飞",1000,90);
	$war = new War();
	$war->startWar($goodman,$badman);
	
?>