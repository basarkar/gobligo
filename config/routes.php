<?php defined('DOC_ROOT') or die;

$route = array();

$route["hello"] = array("test","index");
$route["_404"] = array("_404", "index");
$route["_default"] = array("_default", "index");
$route["welcome"] = array("my_class", "index");
