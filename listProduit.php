
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

?>

<h1>list produit</h1>



<?php foreach ($produit as $value) { ?>
    <br>
    <form action="/addProduit.php" method="get">
    <?php foreach ($value as $key => $value2) { ?>
            <br>
            <p><?= $key ?></p>
            <input type="text" name="<?= $key ?>" value="<?= $value2 ?>"/>
    <?php } ?>
    <input type="submit" value="Add pRODUCT">
    </form>
<?php } ?>
