<?php defined('DOC_ROOT') or die;

$route_path = DOC_ROOT."/./config/routes.php";
$config_path = DOC_ROOT."/./config/config.php";
require_once($route_path);
require_once($config_path);

$handle = get_class_action($route);
call_controller($handle);

function get_class_action($route)
{
	$q = $_GET['q'];
	if (empty($q))
	{
		$q = "_default"; 
		$handle['class'] = $route[$q][0];
		$handle['action'] = $route[$q][1];
		return $handle;
	}
	else if (array_key_exists($q, $route))
	{
		$handle['class'] = $route[$q][0];
		$handle['action'] = $route[$q][1];
		return $handle;
	}
	else
	{
		$q = "_404"; 
		$handle['class'] = $route[$q][0];
		$handle['action'] = $route[$q][1];
		return $handle;
	}
}

function call_controller($handle)
{
	$gobligo_core_path = DOC_ROOT."/./include/gobligo_core.php";
	require_once($gobligo_core_path);

	$class = $handle['class'];
	$action = $handle['action'];
	$controller_path = DOC_ROOT."/./mvc/controller/$class.php";
	require_once($controller_path);
	$controller = new $class();
	$controller->controller = $class;
	$controller->action = $action;
	$controller->$action();
}

function gb_print($val){
	echo "<pre>";
	print_R($val);
	die;
}