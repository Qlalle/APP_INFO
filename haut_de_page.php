<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="haut_de_page.css" />
  </head>
  
  <body>
  <?php
  $email="jb@gmail.com";
  ?>

  <div id="conteneur">    
    <header>
    <h1 id="header"><a href="Page_d'accueil.php" title="Bio&Bon">Bio&Bon</a></h1>
<form method="post" action="connexion.php">
    <p id="pseudo">
        <label>Email</label> : <input type="text" name="email" size="25"/>
    </p>
    <p id="mdp">

        <label>Mot de passe</label> : <input type="password" name="mdp" size="25" />
    </p>
    <table id="hd">
      <tr>
        <td>
        <a id="inscription" href="PageInscription.php">Inscription</a>
  </td>
  <td>

    <p id="bouton">
      <input type="submit" value="Valider" />
    </p>
 </td>
</tr>
</table>
</form>
    <div id="forum"><a href="Forum.php"><img src="Livre.png" alt="logo"  /></a>
  		<h2 id="t" class="Style5"><a id="fo" href="Forum.php">Forum</h2></a>
        <?php
        include("bdd_connect.php");
        $reponse0 = $bdd->query('SELECT basket_sale_id FROM basket_sale INNER JOIN users ON user_id = id_user WHERE user_email="'.$email.'"  ');

        $reponse0 = $reponse0->fetch();
        if($reponse0!=NULL) {
            ?>
            <a href="monPanier.php">monPanier</a>
        <?php
        }
        ?>
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

    