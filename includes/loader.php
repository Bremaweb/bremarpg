<?php
set_include_path("." . PATH_SEPARATOR . ".." . PATH_SEPARATOR . "includes" . PATH_SEPARATOR);
date_default_timezone_set("America/Chicago");

define('DEBUG',true);
define('APP_DIR',"/home/brandon/web-code.local/bremarpg-code");
define('TEMPLATE_DIR',"/home/brandon/web-code.local/bremarpg-code/templates");
define('BASE_URI',"/bremarpg-code/web");

include(APP_DIR . "/includes/config.php");
define("SMARTY_DIR",APP_DIR . "\\includes\\classes\\smarty\\");

debugLog("loader db");
debugLog($app->db);

$app->settings->loadSettings();
?>