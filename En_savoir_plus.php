<?php session_start() ?>
	<DOCTYPE html>
		<html>
			<?php 
				include ("haut_de_page.php");
				include("bdd_connect.php");
				if(isset($_GET["id"])){
					$produit = $_GET["id"];

				?>

					// On selectionne les données dont on a besoin, c'est-à-dire le mot de passe et le pseudo de l'utilisateur
					<table style="width: 100%;">
					   <tbody > <!-- Corps du tableau -->
					       <tr>
						       	<?php 
											$reponse = $bdd->query('SELECT * FROM product_on_line WHERE product_on_line_id=".$produit."');
						          			while ($donnees = $reponse->fetch())
									
								?>
					
					<td> <img src="<?php echo $donnees['image'];?>"/></td>

					<?php
			          }
			          $reponse->closeCursor(); 
			      	?>
				</tr>
			</tbody>
		</table>
				}
			
	

	</html>