<DOCTYPE html>
<?php
include("haut_de_page.php");
?>
    <link rel="stylesheet" href="forum.css" />
 
<h1 id="Forum">Forum</h1>
		
<table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
	<thead> <!-- En-tête du tableau -->
       <tr>
           <th align=center><span>Sujet</span></th>
           <th align=center><span>Date</span></th>
           <th align=center><span>Auteur</span></th>
        </tr>
    </thead>
 </table>

<div style="overflow:auto; height: 600px; width: 100% border: 1px solid orange">
<table style="width: 100%;">
   <tbody > <!-- Corps du tableau -->
       <tr>
				
		<!--requete à la base de données-->
		<?php
			
			//connexion au serveur
			$bdd = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8', 'root', 'root');
			//test connexion au serveur
			if(!$bdd) {
				echo "impossible de ce connecter au serveur";
				exit;
			}
			//echo "connexion à la BDD réussie"

			$reponse = $bdd->query('SELECT * FROM billet INNER JOIN users ON id_user = user_id ORDER BY billet_date ASC');

			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch())
			{

		?>

			<td align=right><a href="#"><?php echo $donnees['billet_name']; ?></a></td>
			<td align=center><?php echo $donnees['billet_date']; ?></td>
			<td align=center><?php echo $donnees['user_name']; ?> <?php echo $donnees['user_firstname'];?></td></br>
		</tr>
	</tbody>
</table>
	    	
    	<?php
			}

			$reponse->closeCursor(); // Termine le traitement de la requête

		?>