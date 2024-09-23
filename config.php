<?php
require_once("environment.php");

$config = array();

if (ENVIRONMENT == "DEV") {
    # code...
    $config ['host']   = 'localhost';
    $config ['dbname'] = 'delivery';
    $config ['user']   = 'root';
    $config ['pass']   = '';
}else{
    # code...
    $config ['host']   = 'localhost';
    $config ['dbname'] = 'delivery';
    $config ['user']   = 'root';
    $config ['pass']   = '';
}

try {
    //code...
    $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['user'], $config['pass']);
} catch (\PDOException $error) {
    //throw $e;
    echo "Error :".$error->getMessage();
}