<?php session_start() ?>
	
    
	<DOCTYPE html>
		<html>
			<?php 
				include ("haut_de_page.php");
				include("bdd_connect.php");
				?>
				 <link rel="stylesheet" href="Sujet.css" />
				<?php
		
    if(isset($_POST['Commentaire'])&&!empty($_POST['Commentaire'])){
    	if(isset($_SESSION['user_id'])) {
		$com = $_POST['Commentaire'];
		
        $reponse = $bdd->query("INSERT INTO comment_billet VALUES (NULL,NOW(),'".$com."','".$_SESSION['user_id']."','".$_GET["id"]."')");
    
	}
	else {
	?>
	<script type="text/javascript">
alert("Vous devez être connecté pour poster un message");
	</script>
	<?php
} 
} 
	?>
 <link rel="stylesheet" href="En_savoir_plus.css" />
				<?php
				if(isset($_GET["id"])){
					$produit = $_GET["id"];

				?>


<?php 
	$reponse = $bdd->query("SELECT * FROM billet INNER JOIN users ON id_user = user_id WHERE billet_id LIKE '%".$_GET["id"]."%'");
	//$reponse = $bdd->query("SELECT * FROM users WHERE user_email LIKE '%".$_SESSION['user_email']."%'");
	while ($donnees = $reponse->fetch())
					{
?>

<div id="corps" style="overflow:auto; height: 725px; width: 98.2%; border: 1px solid orange">
<h1>Sujet : <?php echo $donnees['billet_name'];?></h1>
	<table style="overflow:auto; height: 50px; width: 98%; border: 1px solid orange">
		<thead> <!-- Corps du tableau -->
			<tr>
				
			
				<th id="com">Commentaire</th>							
				<th id="date">Date</th>
				<th id="Nom">Nom</th>

				<?php
			        }
			        $reponse->closeCursor(); 
			   	?>
			</tr>
		</thead>
	</table>



	<table style="overflow:auto; height: 50px; width: 98%; border: 1px solid green">
		<tbody > <!-- Corps du tableau -->
			<tr>
				<?php 
					$reponse = $bdd->query("SELECT * FROM comment_billet INNER JOIN users ON id_user = user_id INNER JOIN billet ON id_billet=billet_id WHERE billet_id LIKE '%".$_GET["id"]."%'");
					//$reponse = $bdd->query("SELECT * FROM users WHERE user_email LIKE '%".$_SESSION['user_email']."%'");
					while ($donnees = $reponse->fetch())
					{
				?>
							
					<td id="comment"><?php echo $donnees['comment'];?></td>						
					<td id="com_date"><?php echo $donnees['comment_date']; ?></td>
					<td id="user_name"><?php echo $donnees['user_name']; ?> <?php echo $donnees['user_firstname'];?></td>
			</tr>
				<?php
			        }
			        $reponse->closeCursor(); 
			    ?>
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

   
    <p id="bouton1">
      <input type="submit" value="Envoyer" name='envoyer' style="width:130px"/>
    </p>
    </form>



	
</div>
</html>