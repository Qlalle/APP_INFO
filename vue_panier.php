
<DOCTYPE html>
  <?php
    include("haut_de_page.php");
  ?>
    <link rel="stylesheet" href="vupanier.css" />

<table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
<?php
if($choixV = 1){//panier achat non vide
?>
<table style="overflow:none; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Panier Achat</span></th>
        </tr>
    </thead>
</table>
    <table style="overflow:none; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th><span id="prix">Prix</span></th>
           <th><span id="photo">Photo</span></th>
           <th><span>Quantité</span></th>
           <th><span id="region">Région</span></th>
           <th><span id="description">Description</span></th>
           <th><span id="soustotal">Sous-total</span></th>
           <th> </th>
       </tr>
   </thead>
 </table>
<div id="fon" style="overflow:auto; height: 275px; width: 100%; border: 1px solid orange">
<table id="fond" style="width: 100%;">
     <tbody > <!-- Corps du tableau -->
       <tr>
    <?php
        for($i=0;$i<$index0;$i++){
  ?>
  <td><?php echo $matrice0[$i][0];?>€/kg</td>
  <td><img src="<?php echo $matrice0[$i][1];?>"/></td>
  <td><?php echo $matrice0[$i][2];?></td>
  <td><?php echo $matrice0[$i][3];?></td>
  <td><?php echo $matrice0[$i][5];?><br/><?php echo $matrice0[$i][4];?></td>
  <td><?php echo $matrice0[$i][6];?>€</td>
  <td><input type="submit" value="Supprimer du panier achat" /></td>
  <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Page produit banane.html';"/></td>
        </tr>
  <?php
}
   ?>

</tbody>
</table>
  </div>

<table style="overflow:none; height: 50px; width: 100%; border: 1px solid orange">
   <tfoot> <!-- En-tête du tableau -->
       <tr>
           <th>Prix total : <?php echo $total_sale;?>€</th>
        </tr>
    </tfoot>
</table>
    <!--code html (et css) d'un panier vente ou il y a quelques chose, on utilise alors les tableaux et les données cités précédement dans la partie "PANIER VENTE"-->

    <!--<form method="POST" action="validation_panier_achat.php">

    </form>-->
<?php }
else {//panier achat vide
    ?>
    <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th><span id="prix">Prix</span></th>
           <th><span id="photo">Photo</span></th>
           <th><span id="region">Région</span></th>
           <th><span id="description">Description</span></th>
           <th> </th>
       </tr>
   </thead>
 </table>
 <div id="fon" style="overflow:auto; height: 600px; width: 100%; border: 1px solid orange">
<table id="fond" style="width: 100%;">
 <h3 style="color:red">Votre Panier est vide</h3>
</table>
    <!--code html (et css) d'un panier vente vide, les variables et tableaux n'existent pas.-->

<?php }

if($choixE = 1){//panier echange non vide
    ?>
    <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Panier Echange</span></th>
        </tr>
    </thead>
</table>
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
<div id="fon" style="overflow:auto; height: 275px; width: 100%; border: 1px solid orange">
<table id="fond" style="width: 100%;">
     <tbody > <!-- Corps du tableau -->
       <tr>
    <?php
        for($i=0;$i<($index1);$i++){
  ?>
  <td><?php echo "Echange";?></td>
  <td><img src="<?php echo $matrice1[$i][0];?>"/></td>
  <td><?php echo $matrice1[$i][1];?></td>
  <td><?php echo $matrice1[$i][2];?></td>
  <td><?php echo $matrice1[$i][4];?><br/><?php echo $matrice1[$i][3];?></td>
  <td><input type="submit" value="Supprimer du panier échange" /></td>
  <td><input type="submit" value="En savoir plus" onclick="document.location.href = 'Page produit banane.html';"/></td>
        </tr>
  <?php
}
   ?>

</tbody>
</table>
  </div>
    <!--code html (et css) d'un panier echange ou il y a quelques chose, on utilise alors les tableaux et les données cités précédement dans la partie "PANIER ECHANGE"-->
    <!--<form method="POST" action="validation_panier_echange.php">

    </form>-->
<?php }

else {//panier echange vide
    ?>
    <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th><span id="prix">Prix</span></th>
           <th><span id="photo">Photo</span></th>
           <th><span id="region">Région</span></th>
           <th><span id="description">Description</span></th>
           <th> </th>
       </tr>
   </thead>
 </table>
 <div id="fon" style="overflow:auto; height: 600px; width: 100%; border: 1px solid orange">
<table id="fond" style="width: 100%;">
 <h3 style="color:red">Votre Panier est vide</h3>
</table>
</table>
    <!--code html (et css) d'un panier echange vide, les variables et tableaux n'existent pas.-->

<?php }
?>