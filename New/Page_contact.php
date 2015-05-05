<!DOCTYPE html">
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="Page_contact.css" />
  </head>
  
  <body>
  <div id="conteneur">    
    <header>
    <h1 id="header"><a href="Page d'accueil.html" title="Bio&Bon">Bio&Bon</a></h1>


    <p id="pseudo">
        <label1>Email</label1> : <input type="text" name="email" size="25"/>
    </p>
    <p id="mdp">

        <label1>Mot de passe</label1> : <input type="password" name="mdp" size="25" />
    </p>
    <p id="bouton">
      <input type="submit" value="Valider" />
    </p>

    <a id="inscription" href="#">Inscription</a>
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

<div id="corps" style="overflow:auto; height: 600px; width: 100%; border: 1px solid orange">
<h3>Vous souhaitez contacter le service Livraison, écrivez à <span>bioetbon@isep.fr</span></h3>
<h3>Pour toute autre demande, merci de remplir le formulaire ci-dessous :</h3>
<br>
    <p id="prenom">
        <label>Prenom :</label><input type="text" name="Prenom" size="25"/>
    </p>
    <p id="nom">

        <label>Nom :</label><input type="text" name="Nom" size="25" />
    </p>
    <p id="Email">

        <label>Email :</label><input type="text" name="Email" size="25" />
    </p>
    <p id="Telephone">

        <label>Telephone :</label><input type="text" name="Telephone" size="25" />
    </p>
    <br>
    <br>
    <p id="objet">

        <label>Objet :</label><br/><input type="text" name="Objet" size="53" />

    </p>
    <p id="Commentaire">

        <label>Commentaire :</label><br/>
        <textarea name="Commentaire" id="Commentaire" rows="10" cols="50"></textarea>
    </p>
    <p id="bouton1">
      <input type="submit" value="Envoyer" style="width:130px"/>
    </p>

     <p id="bouton2">
      <input type="submit" value="Effacer" style="width:130px"/>
    </p>

</div>

      <ul id="Basdepage">
        <li><a href="Page_contact.php">Nous contacter</a></li>
        <li><a href="#">Plan du site</a></li>
        <li><a href="Réglement.php">Réglement</a></li>
        <li><a href="page_tarif.php">Tarif</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
      </ul>
  </div>
  </body>
</html>