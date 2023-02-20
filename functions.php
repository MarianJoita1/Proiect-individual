<?php
//display friendly error message
function displayError($method, $message) {
    die("Error (<b>".$method."</b>): ".$message."<br />");
}

function d($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
function redirect($location) {
    header('Location: '.$location);
    exit;
}
?>