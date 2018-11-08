
<?php 
session_start();
include 'template/header.php';
include 'template/navbar.php';
include 'function.php';
include 'model.php';

var_dump($_SESSION);
var_dump($_POST);

if (!isset($_SESSION['name']) || ($_SESSION['name'] == '')) {
    echo "hello";
    header('Location: index.php');
}
var_dump($produit[0]);
?>

<h1>list produit</h1>



<?php foreach ($produit as $value) { ?>
    <br>
    <form action="addProduit.php" method="get">
    <?php foreach ($value as $key => $value2) { ?>
            <br>
            <input type="text" name="<?= $key ?>" value="<?= $value2 ?>" disabled="disabled" />    
    <?php } ?>
    <input type="submit" value="Add pRODUCT">
    </form>
<?php } ?>
