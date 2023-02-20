<?php
require_once 'main.php';
require_once 'inc/class.user.php';

$u = new User($link);

if (!$u->isLogged()) {
    redirect(APP_WEB_ROOT.'/index.php');
}
$u->logout();
redirect(APP_WEB_ROOT.'/index.php');
?>