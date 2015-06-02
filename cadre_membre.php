<DOCTYPE html>
<html>
<link rel="stylesheet" href="cadre_membre.css">
<div id="membre">
<?php
 echo "Bonjour " .$_SESSION['user_firstname'];
?>
</br>
<a href="pageprofil.php">Mon profil</a> &nbsp;
<a href="monPanier.php">Mon panier</a>

	<form action="deconnexion.php" method="post">
		<p id="boutonDeco">
		    <input type="submit" value="Déconnexion" />
		</p>
	</form>

</div>
</html>