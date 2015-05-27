<?php session_start();?>
<DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="FAQ.css" />


</style>
  </head>
  
  <body>
  <div id="conteneur">    
    <header>
    <h1 id="header"><a href="Page_accueil.php" title="Bio&Bon">Bio&Bon</a></h1>

    <p id="pseudo">
        <label1>Email</label1> : <input type="text" name="email" size="25"/>
    </p>
    <p id="mdp">

        <label1>Mot de passe</label1> : <input type="password" name="mdp" size="25" />
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
    <li><a href="Page_accueil.php"> Accueil </a></li>
    <li><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li><a href="Pagepromo.php"> Promo </a></li>
    <li><a href="Page_vente.php">Vente/Echange</a></li>
  </ul>
</div>
<div id="corps" style="overflow:none; height: 400px; width: 1000px; border: 1px solid orange">
<h1>Foire aux questions</h1>
<h2>Mode d'emploi</h2>
<p>Débuter sur Bio&Bon
</br>
</br>
Je suis vendeur et je cherche à acheter
</br>
</br>
Comment s'inscrire
</br>
</br>
</p>
<h2>Questions fréquentes</h2>
<p>Vous avez constaté un fonctionnement anormal ?
  </br>
  </br>
  Vous avez une suggestion à nous faire ? 
</br>
</br>
Débuter sur Bio&Bon
</br>
</br>
</p>
</div>
<nav>
      <?php
      include("footer.php");
      ?>
    </nav>
    </div>
    </body>