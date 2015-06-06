<?php session_start() ?>
	<DOCTYPE html>
		<html>
			<?php 
				include ("haut_de_page.php");
				include("bdd_connect.php");
				?>
 <link rel="stylesheet" href="En_savoir_plus.css" />
				<?php
				if(isset($_GET["id"])){
					$produit = $_GET["id"];

				?>
<div id="corps" style="overflow:none; height: 660px; width: 1178px; border: 1px solid orange">
					<table style="width: 100%;">
					   <tbody > <!-- Corps du tableau -->
					       <tr>
						       	<?php 
											$reponse = $bdd->query("SELECT * FROM billet INNER JOIN users ON id_user = user_id WHERE billet_id LIKE '%".$_GET["id"]."%'");
											//$reponse = $bdd->query("SELECT * FROM users WHERE user_email LIKE '%".$_SESSION['user_email']."%'");
						          			while ($donnees = $reponse->fetch())
						          			{
								
								?>
							
									<td align=center><?php echo $donnees['billet_name'];?></td>							
									<td align=center><?php echo $donnees['billet_date']; ?></td>
									<td align=center><?php echo $donnees['user_name']; ?> <?php echo $donnees['user_firstname'];?></td>

									<?php
			          }
			          $reponse->closeCursor(); 
			      	?>

							</tr>
						</tbody>
					</table>
				<?php
					}
				?>


    <form method="POST"> 
    <p id="Commentaire">
        <label>Commentaire :</label><br/>
        <textarea name="Commentaire" type="text" rows="10" cols="50"></textarea>
    </p>

    <form method="POST"> 
    <p id="bouton1">
      <input type="submit" value="Envoyer" name='valider' style="width:130px"/>
    </p>



	<?php
     $reponse2 = $bdd->query("SELECT * FROM users WHERE user_email LIKE '%".$_SESSION['user_email']."%'");
     while ($donnees2 = $reponse2->fetch())
          {

    ?>
    <?php
		}
	    $reponse->closeCursor(); 
	?>

    <?php

    if(isset($_POST['valider'])){
    	$com=$_POST['Commentaire'];
    $reponse3 = $bdd->query("INSERT INTO comment_billet VALUES ('','NOW()','$com','".$donnees2["user_id"]."','".$_GET["id"]."')");
    ?>

    <?php
		}
	    $reponse->closeCursor(); 
	?>
</div>
</html>