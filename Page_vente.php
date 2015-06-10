<?php session_start();?>
<DOCTYPE html>
<?php
include("haut_de_page.php");
include("bdd_connect.php");
?>
    <link rel="stylesheet" href="Page_vente.css" />
<div id="menu">
  <ul id="onglets">
    <li><a href="Page_accueil.php"> Accueil </a></li>
    <li><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li><a href="Pagepromo.php"> Promo </a></li>
    <li  class="active"><a href="Page_vente.php">Ajout produit</a></li>
  </ul>
</div>  

<div id="corps" style="overflow:none; height: 660px; width: 1178px; border: 1px solid orange">
  <h2>Mettre votre produit en ligne</h2>
<form method="post" action="traitement.php">
  <p>
    <label for="Type">Type de vente*</label><br/>
    <select name="sale_or_change" id="Vente">
          <option value="0">Vente</option>
          <option value="1">Echange</option>
          
    </select>

  </p>

  <p>
    <label for="produit">Choix du produit*</label><br/>
    <select name="produit" id="produit">
      <optgroup label="Fruits">
      <?php
          $reponse = $bdd->query('SELECT product_name, family_product_name, family_product_id, product_date_id FROM  product_data INNER JOIN family_product ON id_family_product = family_product_id WHERE Fruits_Legumes="0" ORDER BY family_product_name, product_name ');
          $alreadyItrerates = array();
          
          while ($donnees = $reponse->fetch())
            {
              if (!in_array($donnees['family_product_name'], $alreadyItrerates)) {
                ?>
      <optgroup label="<?php    echo $donnees['family_product_name'];?>">
                <?php
                $alreadyItrerates[] = $donnees['family_product_name'];
              }
      ?>
      
      <option value="<?php    echo $donnees['product_date_id'];?>"><?php    echo $donnees['product_name'];?></option>

      <?php
          }
          $reponse->closeCursor(); 
      ?> 
      </optgroup>
    </optgroup>
    <optgroup label="Légumes">
      <?php
          $reponse = $bdd->query('SELECT product_name, family_product_name, family_product_id, product_date_id FROM  product_data INNER JOIN family_product ON id_family_product = family_product_id WHERE Fruits_Legumes="1" ORDER BY family_product_name, product_name');
          $alreadyItrerates = array();

          while ($donnees = $reponse->fetch())
          {
              if (!in_array($donnees['family_product_name'], $alreadyItrerates)) {
                ?>
      <optgroup label="<?php    echo $donnees['family_product_name'];?>">
                <?php
                $alreadyItrerates[] = $donnees['family_product_name'];
              }
      ?>
      
      <option value="<?php    echo $donnees['product_date_id'];?>"><?php    echo $donnees['product_name'];?></option>

      <?php
          }
          $reponse->closeCursor(); 
      ?> 
      </optgroup>
    </optgroup>
     </select>
   </p>

   <p>
    <label for="departement">Choix du departement*</label><br/>
<select name="departement" id="departement">
      <?php
          $reponse = $bdd->query('SELECT departement_nom,departement_id, departement_code FROM departement');

          while ($donnees = $reponse->fetch())
          {
      ?>
      
      <option value="<?php    echo $donnees['departement_id'];?>"><?php    echo $donnees['departement_nom'];?>
        <?php    echo $donnees['departement_code'];?></option>
      
      <?php
          }
          $reponse->closeCursor(); 
      ?>
</select>
      
          
  </p>

  <p>
    <label for="Qualité">Choix de la qualité*</label><br/>
    <select name="quality_type" id="Qualité">
          <option value="0">Classique</option>
          <option value="1">Bio</option>
          
    </select>
  </p>


  <p>
    <label>Quantité :* /kg</label><input type="number" name="quantity" id="qt" step="0.1" value="0.1" min="0.1"/>
  </p>
  <p>
    <label>Prix : *</label><input type="number" name="product_price" id="pr" step="0.1" value="0" min="0"/>€/kg
  </p>

  <p id="Description">

        <label>Description du produit</label><br/><br/>
        <textarea name="product_comment_user" id="Description" rows="10" cols="50"></textarea>
  </p>
  <p id="champ">Champ obligatoire : *</p>


  <p id="bouton1">
      <input type="submit" name="EnvoyerDonnee" value="Valider" style="width:130px"/>
    </p>
 </form>
 
      <form method="POST" action="verif_vente.php">
     <p id="bouton2">
      <input type="submit" value="Annuler" name="annuler" style="width:130px"/>
    </p>
  </form>

</div>
    <?php
    include("footer.php");
    ?>
  </div>
  </body>
</html>