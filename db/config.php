<?php
require 'environment.php';

$config = array();
if (ENVIRONMENT == 'development') {
    $config['dbname'] = 'projeto_crud1cadUser';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    $config['dbname'] = 'projeto_crud1cadUser';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $pdo;
try {
    $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    echo "ERRO ".$e->getMessage();
    exit;
}