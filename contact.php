
<?php 
session_start();
// include 'template/header.php';
include 'template/navbar.php';
include 'function.php';
include 'model.php';


if (!isset($_SESSION['name']) || ($_SESSION['name'] == '')) {
    echo "hello";
    header('Location: index.php');
}


include './template/headerConnect.php';

?>

<h3>Contact</h3>
<div class="container">
  <form action="verifEmail.php" method="POST">
    <label for="name">Username</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email..">

    <label for="message">message</label>
    <textarea id="message" name="message" placeholder="Your Message.."></textarea>

    <input type="submit" value="Submit">
  </form>
</div>