<?php
require_once 'main.php';
require_once 'inc/class.user.php';

$user = new User($link);

$userID = $_GET['id'];
$user->deleteUser($userID);

redirect(APP_WEB_ROOT.'/users.php');
?>