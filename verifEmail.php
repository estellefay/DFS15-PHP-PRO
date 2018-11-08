<?php 

session_start();
include 'template/header.php';
include 'template/navbar.php';
include 'function.php';

var_dump($_SESSION);
var_dump($_POST);


if (isset($_POST['name']) && isset($_POST['email'])) {
    if (verifEmail()){
        header('Location: homeVente.php');
    } else {
        header('Location: contact.php');
        }
} 