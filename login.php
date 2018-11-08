<?php

session_start();

include './template/headerConnect.php';

var_dump($_POST);
if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['age'] = $_POST['age'];
  
}




?>
<h3>Se connecter</h3>
<div class="container">
  <form action="verif.php" method='POST'>
  <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" placeholder="Your password..">

    <input type="submit" value="Submit">
  </form>
</div>
