<?php

session_start();

include './template/headerConnect.php';

// Destruction d'une session si elle existe
if (isset($_SESSION)) {
    session_destroy();
    }
header('Location: index.php');

