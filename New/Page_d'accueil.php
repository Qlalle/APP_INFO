<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="Page_d'accueil.css" />
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
    <li  class="active"><a href="Page_d'accueil.php"> Accueil </a></li>
    <li><a href="Page_achat.php"> Achat </a></li>
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
           <th><span id="Departement">Departement</span></th>
           <th><span id="description">Description</span></th>
           <th> </th>
       </tr>
   </thead>
 </table>
 <div style="overflow:auto; height: 600px; width: 1000px; border: 1px solid orange">
<table style="width: 100%;">
   <tbody > <!-- Corps du tableau -->
       <tr>
           <?php
          $bdd = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8', 'root', '');
          $reponse = $bdd->query('SELECT * FROM product_on_line INNER JOIN departement ON departement_id=id_departement INNER JOIN product_data ON id_product_date=product_date_id ORDER BY product_on_line_id DESC');

          while ($donnees = $reponse->fetch())
          {
      ?>
      <td><?php    echo $donnees['product_price'];?>€/kg</td>
      <td><img src="images3.png"/></td>
      <td><input type="number" name="quantity" id="qt",step="1" value="0" min="0" /></td>
       <td id="dep"><?php    echo $donnees['departement_nom'];?></td>
       <td><?php    echo $donnees['product_name'];?><br/><?php    echo $donnees['product_comment_user'];?></td>
        <td><input type="submit" value="Ajouter au panier" /></td>
        <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Page produit banane.html';"/></td>
       </tr> 
      
      
      <?php
          }
          $reponse->closeCursor(); 
      ?>
           
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