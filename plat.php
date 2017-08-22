<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/plat.css">
    <title>Restaurant Chez Sally's</title>
  </head>
  <body>

<div id="cadre">
  <ul>
    <li><a href="http://localhost/restaurant/accueil.php">Accueil</a></li>
    <li><a href="http://localhost/restaurant/menu.php">Menus</a></li>
  </ul>
</div>

<div class="header">
  <img src="img/pi.png" alt="header">
</div>

<p>Faites votre choix:</p>

    <form method="POST" action="listePlat.php">
<center>
<p>
  <input type="text" placeholder="Nom" name="nom" size="30">
  <input type="text" placeholder="Prix"der name="prix" size="30"></br></br>

<p>
  <input type="file" name="image"/>
</p></br></br>

<div id="case">
      <label><input type="checkbox" id="cbox1" value="checkbox1"><img src="img/caviar.jpg"/></label>
      <label><input type="checkbox" id="cbox2" value="checkbox2"><img src="img/bar.jpg"/></label>
      <label><input type="checkbox" id="cbox3" value="checkbox3"><img src="img/canard.jpg"/></label>
      <label><input type="checkbox" id="cbox4" value="checkbox4"><img src="img/fromage.jpg"/></label>
      <label><input type="checkbox" id="cbox5" value="checkbox5"><img src="img/choco.jpg"/></label>
    <!-- </form> -->
  </div></br></br>

  <div id="case2">
        <label><input type="checkbox" id="cbox1" value="checkbox1"><img src="img/crudi.jpg"/></label>
        <label><input type="checkbox" id="cbox2" value="checkbox2"><img src="img/potiron.jpg"/></label>
        <label><input type="checkbox" id="cbox3" value="checkbox3"><img src="img/gratin.jpg"/></label>
        <label><input type="checkbox" id="cbox4" value="checkbox4"><img src="img/fromage.jpg"/></label>
        <label><input type="checkbox" id="cbox5" value="checkbox5"><img src="img/chataigne.jpg"/></label>
      <!-- </form> -->
    </div></br></br>

    <div id="case3">
          <label><input type="checkbox" id="cbox1" value="checkbox1"><img src="img/anglaise.jpeg"/></label>
          <label><input type="checkbox" id="cbox2" value="checkbox2"><img src="img/haché.jpg"/></label>
          <label><input type="checkbox" id="cbox3" value="checkbox3"><img src="img/jambon.jpg"/></label>
          <label><input type="checkbox" id="cbox4" value="checkbox4"><img src="img/panée.jpg"/></label>
          <label><input type="checkbox" id="cbox5" value="checkbox5"><img src="img/glace.jpg"/></label>
      </div>
</p>
  <input type="submit" value="Envoyer" name="envoyer">
</p>
</form>

</center>
  </body>
</html>
