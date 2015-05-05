<!DOCTYPE html">
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="Page achat.css" />
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
    <li  class="active"><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li><a href="Pagepromo.php"> Promo </a></li>
    <li><a href="Page_vente.php"> Vente </a></li>
  </ul>
</div>


  
<table style="overflow:auto; height: 50px; width: 1000px; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th><span id="prix">Prix</span></th>
           <th><span id="photo">Photo</span></th>
           <th><span>Quantité</span></th>
           <th><span id="region">Région</span></th>
           <th><span id="description">Description</span></th>
           <th> </th>
       </tr>
   </thead>
 </table>
 <div style="overflow:auto; height: 600px; width: 1000px; border: 1px solid orange">
<table style="width: 100%;">
   <tbody > <!-- Corps du tableau -->
       <tr>
           <td>1,40€/kg</td>
           <td><img src="images2.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Pomme</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'pomme.html';"/></td>
       </tr>
       <tr>
           <td>4,20€/kg</td>
           <td><img src="images3.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Banane bio</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Page produit banane.html';"/></td>
       </tr> 
       <tr>
           <td>1,40€/kg</td>
           <td><img src="images2.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Pomme</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'pomme.html';"/></td>
       </tr>
       <tr>
           <td>2,50€/kg</td>
           <td><img src="images4.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>fraise</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Html css Fraise.html';"/></td>
       </tr>     
       <tr>
           <td>2,20€/kg</td>
           <td><img src="images5.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Banane</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Page produit banane.html';"/></td>
       </tr>
       <tr>
           <td>1,40€/kg</td>
           <td><img src="images2.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Pomme</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'pomme.html';"/></td>
       </tr>     
       <tr>
           <td>2,20€/kg</td>
           <td><img src="images5.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Banane</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Page produit banane.html';"/></td>
       </tr>
       <tr>
           <td>2,50€/kg</td>
           <td><img src="images4.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Fraise</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Html css Fraise.html';"/></td>
       </tr>     
       <tr>
           <td>1,40</td>
           <td><img src="images2.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Pomme</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'pomme.html';"/></td>
       </tr>
       <tr>
           <td>4,20€/kg</td>
           <td><img src="images3.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Banane bio</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Page produit banane.html';"/></td>
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
  </body>
</html>