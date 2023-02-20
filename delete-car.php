<?php
require_once 'main.php';
require_once 'inc/class.car.php';

$car = new Car($link);

$carID = $_GET['id'];
$car->deleteCar($carID);

redirect(APP_WEB_ROOT.'/cars.php');
?>