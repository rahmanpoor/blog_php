<?php
require_once "../../functions/pdo_connection.php";
require_once "../../functions/helpers.php";
require_once "../../functions/auth.php";

global $pdo;

//check for set cat_id
if (!isset($_GET['cat_id'])) {
    redirect('/admin/category/index.php');
}

//check for exist cat_id 
$query = "SELECT * FROM categories WHERE id = ? ;";
$statement = $pdo->prepare($query);
$statement->execute([$_GET['cat_id']]);
$category = $statement->fetch();

//check for true cat_id from database
if ($category === false) {
    redirect('/admin/category/index.php');
}

//delete category
if (isset($_GET['cat_id']) && $_GET['cat_id'] !== '') {
    $query = "DELETE FROM categories WHERE id = ? ;";
    $statement = $pdo->prepare($query);
    $statement->execute([$_GET['cat_id']]);
}
redirect('/admin/category/index.php');
?>