<?php
//$drivers= pdo_drivers();
//var_dump($drivers);
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_NAME', 'boom');
define('DB_PASSWORD', '');

try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $error) {
    die($error->getMessage()) ;

}
