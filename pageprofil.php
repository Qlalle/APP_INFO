<?php session_start();?>

<DOCTYPE html>

  <?php
    include("haut_de_page.php");
    include("bdd_connect.php");
  ?>
    <link rel="stylesheet" href="pageprofil.css" />

 <div id="corps" style="overflow:auto; height: 725px; width: 1178px; border: 1px solid orange">
<h1> Mon Profil</h1>

  <p>
      <label><b>Prénom : </b><?php echo "".$_SESSION['user_firstname'];?></label><br/><br/>
      <label><b>Nom : </b><?php echo "".$_SESSION['user_name'];?></label><br/><br/>
      <label><b>Adresse : </b><?php echo "".$_SESSION['user_post_office_box'];?></label><br/><br/>
      <label><b>Ville : </b><?php echo "".$_SESSION['user_city'];?></label><br/><br/>
      <label><b>Email : </b><?php echo "".$_SESSION['user_email'];?></label>
      <br/><br/><br/><br/>
      <a href="mesachats.php">Mes achats</a><br/><br/>
      <a href="mesechanges.php">Mes echanges</a><br/><br/>
      <a href="mesventes.php">Transactions</a>
</p>
  </div>
</html>