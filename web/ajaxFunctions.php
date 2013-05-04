<?php
include("../includes/loader.php");
/*
$app = new application;
$app->settings->loadSettings();
$app->user = new user;
*/

$_GET['module']  = str_replace(array(".","/","\\"),"",$_GET['module']);
include(APP_DIR . "/includes/ajaxFunctions/" . $_GET['module'] . ".ajax.php");

if ( in_array($_GET['function'],$authorizedFunctions) ){
		$app->user->restoreSession($_COOKIE['mpn_sessid']);
		$requestValue = call_user_func_array($_GET['function'], $_POST);
		echo $requestValue;
		exit;
}

echo "alert('ajax function not found or not authorized!');";

?>