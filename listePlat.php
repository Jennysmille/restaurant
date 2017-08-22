<?php
include_once('./connexion.php');

if (isset($_POST['envoyer'])){
  $nom = $_POST['nom'];
  $prix = $_POST['prix'];
  $image = $_POST['image'];

  $req = $bdd->prepare('INSERT INTO plat (nom, prix, image) VALUES(?, ?, ?)');
  $donnees = $req->execute(array($_POST['nom'], $_POST['prix'], $_POST['image']));
  echo "<p>Le plat a bien été ajouté!</p>";
}

$donnees = $bdd->query('SELECT * FROM plat ORDER BY `plat`.`id` DESC');
foreach($donnees as $donnee) {
?>




<p>
    <?php echo $donnee['nom']; ?><br/>

    Le prix:
    <?php echo $donnee['prix']; ?>
    Euros<br/></em>

    <?php echo "<a href='suppPlat.php?id=".$donnee['id']."'><input type= 'submit' value='Supprimer' class='button' name='idPlat'></a>"; ?>

    <?php echo "<a href='modifPlat.php?id=".$donnee['id']."'><input type= 'submit' value='Modifier' class='button' name='idPlat'></a>"; ?>
</p>

   <?php
}
// $reponse->closeCursor(); // Termine le traitement de la requête
?>
