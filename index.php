<?php
require_once 'main.php';
require_once 'inc/class.user.php';

$u = new User($link);

if ($u->isLogged()) {
    $smarty->assign('isLogged', 1);
}
$smarty->display('index.tpl')
?>