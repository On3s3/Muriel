<?php
      include ('bd.php');
$sup = $_GET['id'];

$delete = $BD->prepare('DELETE FROM vendre WHERE datedeb = ? ');
$delete-> execute(array($sup));
header('location:liste_location.php');

?>
