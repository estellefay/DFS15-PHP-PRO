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
            return true;
         }
    }   
 }


 function verifEmail() {
     if  (preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $_POST['email'])) {
     return true;
     } else {
        return false;
    }
 }

?>