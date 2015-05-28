<DOCTYPE html>
<html>
<link rel="stylesheet" href="cadre_membre.css">
<div id="membre">
<?php
 echo "Bonjour " .$_SESSION['user_email'];
?>
</br>
<a href="#">Mon profil</a>

	<form action="deconnexion.php" method="post">
		<p id="boutonDeco">
		    <input type="submit" value="Déconnexion" />
		</p>
	</form>
</div>
</html>