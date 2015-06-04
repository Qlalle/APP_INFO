<?php session_start() ?>
	<DOCTYPE html>
		<html>
			<?php 
				include ("haut_de_page.php");
				include("bdd_connect.php");
				?>
 <link rel="stylesheet" href="Page_vente.css" />
				<?php
				if(isset($_GET["id"])){
					$produit = $_GET["id"];

				?>
				<div id="corps" style="overflow:none; height: 660px; width: 1178px; border: 1px solid orange">
					<table style="width: 100%;">
					   <tbody > <!-- Corps du tableau -->
					       <tr>
						       	<?php 
											$reponse = $bdd->query('SELECT * FROM product_on_line INNER JOIN product_data ON id_product_date=product_date_id');
						          			while ($donnees = $reponse->fetch())
						          			{
									
								?>
					
					<td> <img src="<?php
					if ($produit=$product_on_line_id) { echo $donnees['image']; } else { echo""; } ?>"/></td>
					</tr>

					<?php
			          }
			          $reponse->closeCursor(); 
			      	?>
				
			</tbody>
		</table>
	</div>
			<?php
		}
		?>
	

	</html>