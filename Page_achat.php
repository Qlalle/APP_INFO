<?php session_start();?>
<DOCTYPE html>

<?php
include("haut_de_page.php");
include("bdd_connect.php");
?>

<link rel="stylesheet" href="Page_achat.css" />

<div id="menu">
  <ul id="onglets">
    <li><a href="Page_accueil.php"> Accueil </a></li>
    <li  class="active"><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li><a href="Pagepromo.php"> Promo </a></li>
    <li><a href="verif_connect.php">Ajout produit</a></li>
  </ul>
</div>
   
  
  
<table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th><span id="prix">Prix</span></th>
           <th><span id="photo">Photo</span></th>
           <th><span>Quantité /kg</span></th>
           <th><span id="region">Département</span></th>
           <th><span id="description">Description</span></th>
           <th> </th>
       </tr>
   </thead>
 </table>
 <div style="overflow:auto; height: 600px; width: 100%; border: 1px solid orange">
<table id="fond" style="width: 100%;">
   <tbody > <!-- Corps du tableau -->
          <tr>
           <?php

          $reponse = $bdd->query('SELECT * FROM product_on_line INNER JOIN departement ON departement_id=id_departement INNER JOIN product_data ON id_product_date=product_date_id where sale_or_change="0" ORDER BY product_on_line_id DESC');

          while ($donnees = $reponse->fetch())
          {
            $id=$donnees['product_on_line_id'];
      ?>
   <form method="POST" action="panier.php">
               <input type="hidden" name="id_prod" value=" <?php echo $donnees['product_on_line_id']; ?> " />
               <input type="hidden" name="qualityType" value=" <?php echo $donnees['product_price']; ?> " />
      <td><?php if($donnees['product_price'] == 0) { ?>Echange<?php } else { ?><?php    echo $donnees['product_price'];?>€/kg<?php } ?></td> 
      <td> <img src="<?php echo $donnees['image'];?>"/></td>
      <td><input type="number" name="quantity" id="qt" step="0.1" value="0.1" min="0.1" max="<?php echo $donnees['quantity'];?>"/></td>
       <td id="dep"><?php    echo $donnees['departement_nom'];?></td>
       <td><?php    echo $donnees['product_name'];?></td>
        <td><input type="submit" value="Ajouter au panier"/></td>
          </form>
          <form method="POST" action="<?php echo "En_savoir_plus.php?id=$id";?>">
        <td><input type="submit" value="En savoir plus"/></td>
          </form>
      <td><?php if($donnees['quality_type'] == 1) { ?><img src="bio.jpg"/><?php } else { ?><?php    echo "";?><?php } ?></td>
    
       </tr> 
      
      
      <?php
          }
          $reponse->closeCursor(); 
      ?>
           
   </tbody>
</table>

     </div>
<?php include("footer.php"); ?>

  </div>
  </body>
</html>