<?php
 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'proiect';


try {
    $link = new PDO("mysql:host=".$hostname.";dbname=".$database, $username, $password, array(PDO::ATTR_PERSISTENT => false));
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
}
catch(PDOException $e) {
    die('Connect '.$e->getMessage());
}

//$hostname = 'localhost';
//$username = 'robertbr_fabian';
//$password = 'R*iz5@vc;6)~';
//$database = 'robertbr_fabian';
?>

