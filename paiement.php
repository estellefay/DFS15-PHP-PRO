<?php

session_start();
include 'template/header.php';
include 'template/navbar.php';
include 'function.php';
include 'model.php';


if (!isset($_SESSION['name']) || ($_SESSION['name'] == '')) {
    echo "hello";
    header('Location: index.php');
}


?>

<h1>Paiement</h1>