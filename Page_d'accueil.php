<DOCTYPE html>

  <?php
    session_start();
    include("haut_de_page.php");
    include("bdd_connect.php");
  ?>
    <link rel="stylesheet" href="Page_d'accueil.css" />

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
  
<table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
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
 <div style="overflow:auto; height: 600px; width: 100%; border: 1px solid orange">
<table style="width: 100%;">
   <tbody > <!-- Corps du tableau -->
       <tr>
           <?php
          $reponse = $bdd->query('SELECT * FROM product_on_line INNER JOIN departement ON departement_id=id_departement INNER JOIN product_data ON id_product_date=product_date_id ORDER BY product_on_line_id DESC');

          while ($donnees = $reponse->fetch())
          {
      ?>
   <form method="POST" action="add.php?id=">
      <td><?php if($donnees['product_price'] == 0) { ?>Echange<?php } else { ?><?php    echo $donnees['product_price'];?>€/kg<?php } ?></td> 
      <td> <img src="<?php echo $donnees['image'];?>"/></td>
      <td><input type="number" name="quantity" id="qt" step="1" value="0" min="0" /></td>
       <td id="dep"><?php    echo $donnees['departement_nom'];?></td>
       <td><?php    echo $donnees['product_name'];?><br/><?php    echo $donnees['product_comment_user'];?></td>
        <td><input type="submit" value="Ajouter au panier" /></td>
        <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Page produit banane.html';"/></td>
      </form>
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