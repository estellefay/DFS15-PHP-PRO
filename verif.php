<?php 

session_start();
include 'template/header.php';
include 'template/navbar.php';
include 'function.php';


if (isset($_POST['name']) && isset($_POST['password'])) {
    if (verif()){
        header('Location: homeVente.php');
    } else {
            header('Location: login.php');
        }
} 