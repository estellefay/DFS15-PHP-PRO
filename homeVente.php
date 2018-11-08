
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
?>

<h1>Homme vente</h1>

<p>Bonjour <?= $_SESSION['name'] ?> </p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra dapibus ultrices. Morbi pretium justo non mauris elementum, vitae egestas magna fermentum. Nunc quis aliquam ex, id mollis ante. Etiam cursus, erat at imperdiet rutrum, odio eros sagittis mi, ac aliquet mi nisl dictum risus. Cras dictum, libero in finibus hendrerit, lectus elit vestibulum ante, id cursus lectus enim sed nibh. Mauris ut elementum ante. Curabitur convallis porttitor cursus. Aenean ut commodo tellus. Nulla non purus dapibus, accumsan felis id, hendrerit lorem. Integer nisi nulla, porttitor sit amet libero vel, vehicula aliquet erat. Aliquam erat volutpat. Phasellus vel nibh at massa sodales molestie eget quis magna. Nam eleifend lacus a neque pharetra, eget varius elit laoreet. Aliquam porta orci et faucibus placerat. Aliquam sit amet elit sed massa pulvinar pellentesque. Maecenas suscipit, tellus non porta luctus, purus eros varius augue, in scelerisque sapien neque et odio.



<p>Nulla metus augue, posuere non tellus vel, mattis pellentesque velit. Nulla et leo ipsum. Suspendisse non tortor maximus, feugiat velit sit amet, commodo sapien. Ut imperdiet elementum sem sed venenatis. Mauris pellentesque, nunc eu dapibus posuere, magna ante viverra tellus, ac faucibus odio libero non mauris. Integer nec nibh nisi. Duis nec dignissim sapien. Ut tincidunt eros vitae nibh rhoncus pharetra. Donec dictum libero a dolor eleifend lacinia. Etiam sagittis odio non libero tristique vulputate. Nulla eget suscipit lorem, ac aliquet enim. Integer eget erat elit. Aenean tristique massa sit amet turpis viverra, a fermentum eros faucibus.</p>


<p>Fusce gravida ultricies elit, at vulputate nisl tincidunt eget. Nullam vel nibh porta, aliquet justo tincidunt, placerat sapien. Vivamus pellentesque ipsum id urna venenatis, venenatis finibus ante condimentum. Proin varius eget erat in tincidunt. Pellentesque ornare mauris sit amet sem vestibulum maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis nunc dolor, vulputate convallis mi efficitur quis. Suspendisse euismod fermentum lectus, at fermentum metus volutpat a. Nunc convallis felis sed elit eleifend dignissim. In a convallis nisl. Mauris malesuada dignissim quam, dignissim condimentum sapien facilisis sit amet. Nam ultrices tellus id nunc rhoncus, ac blandit orci facilisis. Nulla commodo aliquam iaculis. Quisque sed tempor dolor, ut ultricies erat.</p>