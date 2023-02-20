<?php
require_once 'main.php';
require_once 'inc/class.car.php';
require_once 'inc/class.user.php';

$u = new User($link);

if ($u->isLogged()) {
    $smarty->assign('isLogged', 1);
}
$c = new Car($link);

$userID = $_SESSION['u']['id'];

if ($u->isAdmin()) {
  $userID = 0;
}

$cars   = $c->getCars($userID);
$brands = $c->getBrands();
$models = $c->getModels();

$smarty->assign('cars', $cars);
$smarty->assign('brands', $brands);
$smarty->assign('models', $models);

$smarty->display('cars.tpl')
?>