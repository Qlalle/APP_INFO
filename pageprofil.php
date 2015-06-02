<?php session_start();?>

<DOCTYPE html>

  <?php
    include("haut_de_page.php");
    include("bdd_connect.php");
  ?>
    <link rel="stylesheet" href="Page_accueil.css" />

 <div style="overflow:auto; height: 600px; width: 100%; border: 1px solid orange">

      <label>Prénom : <?php echo "".$_SESSION['user_firstname'];?></label><br/>
      <label>Nom : <?php echo "".$_SESSION['user_name'];?></label><br/>
      <label>Adresse : <?php echo "".$_SESSION['user_post_office_box'];?></label><br/>
      <label>Ville : <?php echo "".$_SESSION['user_city'];?></label><br/>
      <label>Email : <?php echo "".$_SESSION['user_email'];?></label><br/>

  </div>
</html>