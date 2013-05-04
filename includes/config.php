<?php

include(APP_DIR ."/includes/functions.php");

debugLog("config");
debugLOg(APP_DIR);

$settings = array("site_url" => "http://localhost/bremarpg-code/web");

// include classes
require(APP_DIR . "/includes/settings.class.php");
require(APP_DIR . "/includes/db.class.php");
require(APP_DIR . "/includes/user.class.php");
require(APP_DIR . "/includes/app.class.php");
require(APP_DIR . "/includes/classes/uriRouter.class.php");
require(APP_DIR . "/includes/classes/smarty/Smarty.class.php");
require(APP_DIR . "/includes/classes/clsPage_base.class.php");
require(APP_DIR . "/includes/classes/clsPageReqLogin_base.class.php");



$app = new application();

$app->db = new dbClass("10.0.0.225","3306","rpg2011","root","dbpa55");

//$app->user = new user();
$app->router = new uriRouter();

include(APP_DIR . "/includes/routes.php");

?>