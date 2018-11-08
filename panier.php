
<?php 

include 'addProduit.php';


if (!isset($_SESSION['name']) || ($_SESSION['name'] == '')) {
    echo "hello";
    header('Location: index.php');
}




?>
<h1>Mon panier</h1>
<?php foreach ($panier as $key => $value) { ?>
<br>
<p><?= $key ?></p>
<p><?= $value ?></p>
<?php } ?>

<form action="paiement.php" method="get">
<input type="submit" value="paiemnt">
</form>
