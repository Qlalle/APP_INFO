<!DOCTYPE html">
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="PDB1.css" />
  </head>
  
  <body>
  <div id="conteneur">    
    <header>
    <h1 id="header"><a href="Page d'accueil.html" title="Bio&Bon">Bio&Bon</a></h1>

    <p id="pseudo">
        <label></label> Email: <input type="text" name="email" size="25"/>
    </p>
    <p id="mdp">

        <label></label> Mot de passe: <input type="password" name="mdp" size="25" />
    </p>
    <p id="bouton">
      <input type="submit" value="Valider" />
    </p>
    <a id="inscription" href="PageInscription.php">Inscription</a>
 
    <div id="forum"><a href="Forum.php"><img src="Livre.png" alt="logo"  /></a>
  		<h2 id="t" class="Style5"><a href="Forum.php">Forum</h2></a>
		</div>

    <div id="searchbar">        
            <form action="" class="formulaire">
               <input class="champ" type="text" placeholder="Ex : Fraise/pomme de terre" size="70" maxlength="50" />
               <input class="bouton" type="button" value="Rechercher" />
            </form>
    </div>

    <a id="ra" href="#">Recherche avancée</a>
    
</header>

    <div id="menu">
  <ul id="onglets">
    <li><a href="Page_d'accueil.php"> Accueil </a></li>
    <li><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li><a href="Pagepromo.php"> Promo </a></li>
    <li><a href="Page_vente.php"> Vente </a></li>
  </ul>
</div>
</body>
</html>