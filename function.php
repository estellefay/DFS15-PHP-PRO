<?php 

function verif() {
    if (isset($_POST)) {
        if ($_POST['name'] === $_SESSION['name'] || $_POST['password'] === $_SESSION['password']) {
            // header('Location: inde.php');
            //  exit();
            return true;
        } else {
            // header('Location: login.php');
            // exit();
            return false;
         }
    }   
 }

?>