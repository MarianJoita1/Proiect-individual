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
if (isset($_GET['car_id'])) {
  if (isset($_GET['add'])) {
    $car_id = $_GET['car_id'];
    $car    = $c->getCar($car_id);
    $c->addToWishlist($car_id);
    // $_SESSION['wishlist'][$car_id] = $car;
    exit;
  }
  if (isset($_GET['remove'])) {
    $car_id = $_GET['car_id'];
    $car    = $c->getCar($car_id);
    $c->removeFromWishlist($car_id);
    // unset($_SESSION['wishlist'][$car_id]);
    exit;
  }
}
$cars  = $c->getWishlist();
// $brands = $c->getBrands();
// $models = $c->getModels();

$smarty->assign('cars', $cars);
// $smarty->assign('brands', $brands);
// $smarty->assign('models', $models);

$smarty->display('favorites.tpl')
?>