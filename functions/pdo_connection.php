<?php

$config = require_once __DIR__ . '/../../Blog_config/config.php';



global $pdo;
try {
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    $pdo = new PDO("mysql:host={$config['db_host']};dbname={$config['db_name']}", $config['db_user'], $config['db_pass'],$options);
    return $pdo;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    exit;
}
