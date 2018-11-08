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

foreach ($_GET as $key => $value) {
    $_SESSION['panier'][$key] =  $_GET[$key];
    header('Location: panier.php');
}

// if (isset($_GET['nom'])) {
//     $_SESSION['panier']['nom'] = $_GET['nom'];
//     $_SESSION['panier']['description'] = $_GET['description'];
//     $_SESSION['panier']['prix'] = $_GET['prix'];
//     header('Location: listProduit.php');

// }

$panier = $_SESSION['panier'] + $_GET;

?>
