<?php session_start();?>
<DOCTYPE html>
<?php
include("haut_de_page.php");
include("bdd_connect.php");
?>
    <link rel="stylesheet" href="forum.css" />


  <div id="corps" style="overflow:auto; height: 725px; width: 100%; border: 1px solid orange">
<h1>Forum</h1>
		
<table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
	<thead> <!-- En-tête du tableau -->
       <tr>
           <th align=center><span>Sujet</span></th>
           <th align=center><span>Date</span></th>
           <th align=center><span>Auteur</span></th>
        </tr>
    </thead>
 </table>

<div id="corps"style="overflow:auto; height: 600px; width: 100% border: 1px solid orange">
<table style="width: 100%; border-spacing: 20px; ">
   <tbody > <!-- Corps du tableau -->
       <tr>
				
		<!--requete à la base de données-->
		<?php

			$reponse = $bdd->query('SELECT * FROM billet INNER JOIN users ON id_user = user_id ORDER BY billet_date ASC');

			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch())
			{

		?>

			<td align=left><a href="#"><?php echo $donnees['billet_name']; ?></a></td>
			<td align=center><?php echo $donnees['billet_date']; ?></td>
			<td align=center><?php echo $donnees['user_name']; ?> <?php echo $donnees['user_firstname'];?></td>
		</tr>

		<?php
			}

			$reponse->closeCursor(); // Termine le traitement de la requête

		?>
	</tbody>
</table>	
</div>
</div>
</html>