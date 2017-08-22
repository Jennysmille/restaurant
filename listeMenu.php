<?php
include_once('./connexion.php');

if( isset($_POST['nom']) &&  isset($_POST['prix']) ){

    $req = $bdd->prepare('INSERT INTO menu (nom, prix) VALUES(?, ?)');

    $resp = $req->execute(array($_POST['nom'], $_POST['prix']));
    //on recupere l'id du menu que l'on vient de crée

    $id_new_menu = $bdd->lastInsertId();
    echo "<p>Le menu est ajouté!</p>";


    $tableau_plats = $_POST['id_plat'];

    foreach($tableau_plats as $idPlat)
    {
      $req2 = $bdd->prepare('INSERT INTO jointure_plat_menu (id_menu, id_plat) VALUES(?, ?)');
      $resp = $req2->execute(array($id_new_menu, $idPlat));
    }
    echo "<p>Les plats choisis ont étaient ajoutés au menu</p>";

}

?>



<?php
$reponse = $bdd->prepare('SELECT
                         menu.nom AS menu_nom,
                         menu.prix AS menu_prix,
                         menu.id AS id_menu, GROUP_CONCAT(plat.nom SEPARATOR ", ") AS plat_nom
                         FROM `jointure_plat_menu`
                         LEFT JOIN menu ON `menu`.id = `jointure_plat_menu`.id_menu
                         LEFT JOIN plat ON `plat`.id = `jointure_plat_menu`.id_plat
                         GROUP BY menu.id
                         ORDER BY menu.id DESC
                         ');
$reponse->execute();

// SELECT *  FROM `jointure_plat_menu` LEFT JOIN `plat` ON `jointure_plat_menu`.id_plat = plat.id  WHERE `id_menu` = 107


while($donnees = $reponse->fetch())
{
// print_r($donnees);
 ?>

<p>
      <?php echo $donnees['menu_nom'] ?></br>
    Le prix:
      <?php echo $donnees['menu_prix']; ?>
    Euros<br/></em>
      <?php echo $donnees['plat_nom']; ?>

      <?php echo "<a href='suppMenu.php?id=".$donnees['id_menu']."'><input type= 'submit' value='Supprimer' class='button' name='idMenu'></a>"; ?>

      <?php echo "<a href='modifMenu.php?id=".$donnees['id_menu']."'><input type= 'submit' value='Modifier' class='button' name='idMenu'></a>"; ?>

</p>

<?php
 }

// $reponse->closeCursor(); // Termine le traitement de la requête
?>
