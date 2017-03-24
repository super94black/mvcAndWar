<?php
	function C($name,$method){
		require_once('libs/Controller/'.$name.'Controller.class.php');
		$controller = $name."Controller";
		$obj = new $controller();
		$obj->$method();
	}
	// C("test","show");

	function M($name){
		require_once('libs/Model/'.$name.'Model.class.php');
		$model = $name.'Model';
		$obj = new $model();
		return $obj;
	}
	function V($name){
		require_once('libs/View/'.$name.'View.class.php');
		$view = $name.'View';
		$obj = new $view();
		return $obj;
	}
	function daddslashes($str){
		return (!get_magic_quotes_gpc())? addslashes($str) : $str;//转义字符 判断接受的参数是否为非法传入
	}

?>