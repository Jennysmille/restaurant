<?php
include_once('./connexion.php');

$id_new_menu= $_GET['id'];

$requete = $bdd->prepare('DELETE FROM `jointure_plat_menu` WHERE id_menu = :id_menu');
$requete->bindParam(':id_menu', $id_new_menu);

$requete->execute();

$requete = $bdd->prepare('DELETE FROM `menu` WHERE id = :id');
$requete->bindParam(':id', $id_new_menu);

$requete->execute();

header('Location:listeMenu.php');

?>
