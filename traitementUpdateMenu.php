<?php

// On se connecte à la bdd
require_once("./connexion.php");

// On déclare les variables name

$nom = $_POST['nom'];
$prix = $_POST['prix'];
// $image = $_FILES['image']['name'];
// $maxsize = 12345;
// $maxwidth = 1000;
// $maxheight = 1000;

$idMenu = $_GET['id'];

// Contrôles sur le fichier :

// Si on laisse l'image vide, le menu garde la précédente.

if(empty($_FILES['image']['tmp_name'])) {

 // On modifie une entrée dans la table plats

 $req = $bdd->prepare('UPDATE `restaurant`.`menu` SET `nom` = :nom, `prix` = :prix WHERE `menu`.`id` = :id');

 $req->execute(array(

   'nom' => $nom,
   'prix' => $prix,
   'id' => $id_new_menu

   ));

}

else {

    if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

    if ($_FILES['image']['size'] > $maxsize) $erreur = "Le fichier est trop gros";

    // On récupère les photos envoyées :

    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

    //1. strrchr renvoie l'extension avec le point (« . »).

    //2. substr(chaine,1) ignore le premier caractère de chaine.

    //3. strtolower met l'extension en minuscules.

    $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );

    if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";

    $image_sizes = getimagesize($_FILES['image']['tmp_name']);

    if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande";

     $resultat = move_uploaded_file($_FILES['image']['tmp_name'], "assets/img/".$image);

     if ($resultat) echo "Transfert réussi";

     // On modifie une entrée dans la table plats

     $req = $bdd->prepare('UPDATE `restaurant`.`menu` SET `nom` = :nom, `prix` = :prix, `image` = :image WHERE `menu`.`id` = :id');

     $req->execute(array(

        'nom' => $nom,
        'prix' => $prix,
      'image' => $image,
      'id' => $id_new_menu

        ));

}

// Redirection vers la page resultatPlat.php

header('Location:menu.php');

?>
