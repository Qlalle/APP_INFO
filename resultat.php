<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Rechercher</title>
	</head>

	<body>
		
	<p><?php 
	$bdd = new PDO('mysql:host=localhost;dbname=bioEtBon','root','root')
	$requete = $bdd->prepare('SELECT * FROM product_on_line WHERE fruit = ? ');
	while($donnees = $requete->fetch()){
		echo '<p>'. $donnees[''] .'-'.$donnees[''] .'-'.$donnees[''] .'-'.$donnees[''] .'-'.$donnees[''] .' </p>';

	}

	if(){
	echo htmlspecialchars'Il y \' a [] résultats correspondants à votre recherche'  
		}
	else{

		echo'Aucun résultat ne correspond à votre recherche';
	}

	?></p>

	</body>
</html>