<?php
ob_start("ob_gzhandler");
session_start();
ini_set('display_errors', 'On');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

define ("APP_DIR_ROOT",  $_SERVER['DOCUMENT_ROOT']."/proiect/");
// define ("APP_DIR_ROOT",  $_SERVER['DOCUMENT_ROOT']."/");

//APP_WEB_ROOT
$serverSchema = 'http';
$app_web      = "";
$uri          = "";
$script_name  = explode('/', $_SERVER['SCRIPT_NAME']);
$app_web      = [];

if (count($script_name) > 2) {
    for ($i = 1; $i < count($script_name)-1; $i++) {
        $app_web[] = $script_name[$i];
    }
}
if (count($app_web)) {
    define("APP_WEB_ROOT", $serverSchema."://".$_SERVER['HTTP_HOST']."/".implode("/", $app_web));
}
else {
    define("APP_WEB_ROOT", $serverSchema."://".$_SERVER['HTTP_HOST']);
}

require_once 'db.php';
require_once 'functions.php';
require_once APP_DIR_ROOT.'smarty/Smarty.class.php';

$smarty= new Smarty();
$smarty->setTemplateDir(APP_DIR_ROOT.'templates/');
$smarty->setCompileDir(APP_DIR_ROOT.'templates_c/');

$smarty->assign('APP_WEB_ROOT', APP_WEB_ROOT);
?>