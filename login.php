<?php
require_once 'main.php';
require_once 'inc/class.user.php';

$u = new User($link);

if ($u->isLogged()) {
    redirect(APP_WEB_ROOT.'/index.php');
}

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    if ($u->login($email, $password)) {
        redirect(APP_WEB_ROOT.'/index.php');
    }
}
$smarty->display('login.tpl')
?>