
<?php 
session_start();
include 'template/header.php';
include 'template/navbar.php';
include 'function.php';
include 'model.php';

var_dump($_SESSION);
var_dump($_POST);

if (!isset($_SESSION['name']) || ($_SESSION['name'] == '')) {
    echo "hello";
    header('Location: index.php');
}
?>

