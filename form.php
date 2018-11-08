<?php

session_start();

include './template/headerConnect.php';

// Destruction d'une session si elle existe
if (isset($_SESSION)) {
    session_destroy();
    
    }
?>

<h3>Crée un compte</h3>
<div class="container">
  <form action="login.php" method="POST">
    <label for="name">Username</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email..">

    <label for="age">Age</label>
    <input type="text" id="age" name="age" placeholder="Your age..">

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" placeholder="Your password..">



    <input type="submit" value="Submit">
  </form>
</div>