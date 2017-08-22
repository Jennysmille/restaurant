<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/menu.css">
    <title>Restaurant Menu Chez Sally's</title>
  </head>
  <body>
<div id="cadre">
  <ul>
    <li><a href="http://localhost/restaurant/accueil.php">Accueil</a></li>
    <li><a href="http://localhost/restaurant/plat.php">Plats</a></li>
  </ul>
</div>

<div class="header">
<img src="img/pi.png" alt="header">
</div>

<p>Les menus:</p>

    <form method="POST" action="listeMenu.php">
<center>
<p>
  <input type="text" placeholder="Nom" name="nom" size="30">
  <input type="text" placeholder="Prix" name="prix" size="30"></br></br>
  <!-- <select name="plat"> -->
</p>

<p>
  <input type="file" name="image"/>
</p>

<p>Liste des plats:</p>


  <?php
  include_once('./connexion.php');

  $reponse = $bdd->query('SELECT * FROM plat');

  while ($donnees = $reponse->fetch())
  {
    echo '<input type="checkbox" name="id_plat[]" class="listePlat" value="'.$donnees['id'].'">';
    echo $donnees['nom'];

  }
  $reponse->closeCursor(); // Termine le traitement de la requête
  ?></br></br>

<p>
  <input type="submit" value="Envoyer" name="envoyer">
</p>
</center>
</form>

  </body>
</html>
