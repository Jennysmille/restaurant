<?php
include_once('./connexion.php');

$idPlat= $_GET['id'];

$requete = $bdd->prepare('DELETE FROM `jointure_plat_menu` WHERE id_plat = :id_plat');
$requete->bindParam(':id_plat', $idPlat);

$requete->execute();

$requete = $bdd->prepare('DELETE FROM `plat` WHERE id = :id');
$requete->bindParam(':id', $idPlat);

$requete->execute();

header('Location:listePlat.php');

?>
