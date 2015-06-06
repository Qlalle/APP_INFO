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
											$reponse = $bdd->query("SELECT * FROM product_on_line INNER JOIN product_data ON id_product_date=product_date_id INNER JOIN users ON user_id=id_saler INNER JOIN departement ON departement_id=id_departement WHERE product_on_line_id LIKE '%".$_GET["id"]."%'");
						          			while ($donnees = $reponse->fetch())
						          			{
									
								?>
					
					<td id="produit"> <img src="<?php echo $donnees['image'];?>"/><br/><br/><u>Description </u>: <br/><?php    echo $donnees['product_name'];?><br/><?php    echo $donnees['product_comment_user'];?></td>
					<td id="quantite"><input type="number" name="quantity" id="qt" step="1" value="1" min="1" max="<?php echo $donnees['quantity'];?>"/></td>
					<td id="prix"><?php if($donnees['product_price'] == 0) { ?>Echange<?php } else { ?><?php    echo $donnees['product_price'];?>€/kg<?php } ?></td> 
       				<td id="depa"><?php    echo $donnees['departement_nom'];?></td>
       				</tr>
       				</tbody>
       				<tfoot>
       					<tr>
       						</table>
       					</br>
       				</br>
       						<h3><u>
       							Information vendeur
       						</u>
       						</h3>

       				<label><b><u>Nom</u> : </b><?php echo $donnees['user_name'];?></label><br/>
       				<label><b><u>Prénom</u> : </b><?php echo $donnees['user_firstname'];?></label><br/>
       				<label><b><u>Email</u> : </b><?php echo $donnees['user_email'];?></label><br/>
       				<label><b><u>Adresse</u> : </b><?php echo $donnees['user_post_office_box'];?></label><br/>
       		
					

					<?php
			          }
			          $reponse->closeCursor(); 
			      	?>
				
						
					
				</div>
					<div id="bas" style="overflow:none; height: 20px; width: 1178px; border: 1px solid orange">
					<table style="width: 100%;">
					<tfoot>	
					<tr>			
					<form method="POST" action="Page_accueil.php">
              			<th><input style="texte-align:right" type="submit" value="Retour Accueil"/></th>
         		     </form>
         		 </tr>
         		     </tfoot>
         		 </table>
         		</div>
			<?php
		}
		?>
	

	</html>