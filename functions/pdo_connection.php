<?php

global $pdo;
try {
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    $pdo = new PDO('mysql:host=quirky-brattain-p8gmpujjz-db;dbname=hungry_antonelli','root','oZaqWQkN8sbLxWMbUNKOWjOx',$options);
    return $pdo;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    exit;
}
