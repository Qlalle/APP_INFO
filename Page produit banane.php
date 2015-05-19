<DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="Pagepromo.css" />
  </head>
  
  <body>
  <div id="conteneur">    
    <header>
    <h1 id="header"><a href="Page_d'accueil.php" title="Bio&Bon">Bio&Bon</a></h1>

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
    <div id="forum"><a href="Forum.php"><img src="Livre.png" alt="logo"  /></a>
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

  

 <div id="corps" style="overflow:none; height: 600px; width: 100%; border: 1px solid orange">

  

  

<table id="user">

     

        <td><img id="quentin" src="Michel.jpg"/> 

        <ul>

        <li>Produit proposé par Michel</li> 

        <li>Région:19</li> 

        <li>Note de Michel</li>

       </ul>

        </td>

</table>

<table id="produit">

        <td><img id="banane"src="banane.jpg"/>

          

          <ul>

         <li> Banane de Guyane cultivé en plein air.</li>

         <li>Ramassé à la main et cultivé sans pesticide et </br>avec des produits naturels.</li>                

         <li>Conseil : cette banane est idéale pour faire</br> une banana split.</li>                                     

         <li>A manger rapidement </br>(conservation minimale) </li>

         </ul>



    </td>

</table>



   <h3>

  Ce produit est issu de l'agriculture biologique. </br>Il respecte la charte bio.

   </h3>

  

      <table id="Prix">
  <tbody>
    <tr>
      <td>4,20€/kg</td>
      <td><input type="number",step="1" value="0" min="0" /></td>
      <tr>
      <td id="retour"><input type="submit" value="Retour" onclick="history.go(-1)"/></td>
      <td id="ajout"><input type="submit" value="Ajouter au panier" /></td>
    </tr>
    </tr>
  </tbody>
</table>



  </div>





   <ul id="Basdepage">

        <li><a href="Page_contact.php">Nous contacter</a></li>
        <li><a href="#">Plan du site</a></li>
        <li><a href="Réglement.php">Réglement</a></li>
        <li><a href="page_tarif.php">Tarif</a></li>
        <li><a href="FAQ.php">FAQ</a></li>

      </ul>

  </div>

</div>

  </body>

</html>