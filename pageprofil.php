<?php session_start();?>

<DOCTYPE html>

  <?php
    include("haut_de_page.php");
    include("bdd_connect.php");
  ?>
    <link rel="stylesheet" href="pageprofil.css" />

 <div id="corps" style="overflow:auto; height: 725px; width: 1178px; border: 1px solid orange">
<h1> Mon Profil</h1>
<?php
     $reponse = $bdd->query("SELECT * FROM users WHERE user_email LIKE '%".$_SESSION['user_email']."%'");
     while ($donnees = $reponse->fetch())
          {

    ?>


  <p>
    <?php if($donnees['user_type'] == 0) { ?><img src="../APP_INFO/avatar_homme.png"/> <?php } else { ?><img src="../APP_INFO/avatar_femme.png"/> <?php } ?>
  </p>
  <?php
                }
                $reponse->closeCursor(); 
              ?>

  <p>
      <label><b>Prénom : </b><?php echo "".$_SESSION['user_firstname'];?></label><br/><br/>
      <label><b>Nom : </b><?php echo "".$_SESSION['user_name'];?></label><br/><br/>
      <label><b>Adresse : </b><?php echo "".$_SESSION['user_post_office_box'];?></label><br/><br/>
      <label><b>Ville : </b><?php echo "".$_SESSION['user_city'];?></label><br/><br/>
      <label><b>Email : </b><?php echo "".$_SESSION['user_email'];?></label>
      <br/><br/><br/><br/>
      <a href="mesachats.php">Historique de mes achats</a><br/><br/>
      <a href="mesechanges.php">Historique de mes echanges</a><br/><br/>
      <a href="promotion.php">Historique de mes promotions</a><br/><br/>
      <a href="transaction.php">Transaction en cours</a>
</p>

         
  </div>
</html>