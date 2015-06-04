<DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="haut_de_page.css" />
  </head>
  
  <body>
  <div id="conteneur1">
    <header>
    <h1 id="header"><a href="Page_accueil.php" title="Bio&Bon">Bio&Bon</a></h1>

<?php
if ((!isset($_SESSION['user_email'])) || ($_SESSION['user_email'] == '')){
    include ('cadre_connect.php');
}
else {

    include('cadre_membre.php');
}
?>


    <div id="for"><a href="Forum.php"><img src="Livre.png" alt="logo"  /></a>
  		<h2 id="t" class="Style5"><a id="fo" href="Forum.php">Forum</h2></a>
		</div>

   <div id="searchbar">        
            <form action="recherche.php" class="formulaire">
              <label id="product_name"></label> 
               <input id ="product_name" class="champ" name="keyword" type="text" placeholder="Ex : Fraise/pomme de terre" size="70" maxlength="50"required />

               
               <input class="bouton" type="submit" value="Rechercher" />                                                                              
            </form>
    </div>

    <a id="ra" href="#">Recherche avancée</a>
    
</header>

    