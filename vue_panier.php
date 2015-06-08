
<DOCTYPE html>
  <?php
    include("haut_de_page.php");
  ?>
    <link rel="stylesheet" href="vupanier.css" />

<table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
<?php
if($choixV == 1){//panier achat non vide
?>
<table style="overflow:none; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th style="font-size:25px">Panier Achat</span></th>
        </tr>
    </thead>
</table>
    <table style="overflow:none; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th><span id="prix1">Prix</span></th>
           <th><span id="photo1">Photo</span></th>
           <th><span id="quant1">Quantité</span></th>
           <th><span id="region1">Région</span></th>
           <th><span id="description1">Description</span></th>
           <th><span id="soustotal1">Sous-total</span></th>
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

        //for($i=0;$i<1;$i++){

  ?>
           <form method="POST" action="supr_objet_panier_vente.php">
               <input type="hidden" name="id_prod_panier_achat" value=" <?php echo $matrice0[$i][7]; ?> " />
               <input type="hidden" name="id_prod_on_line" value=" <?php echo $matrice0[$i][8]; ?> " />
               <input type="hidden" name="quantity_panier" value=" <?php echo $matrice0[$i][2]; ?> " />
               <input type="hidden" name="quantity_line" value=" <?php echo $matrice0[$i][9]; ?> " />
  <td><?php echo $matrice0[$i][0];?>€/kg</td>
  <td id="pho"><img src="<?php echo $matrice0[$i][1];?>"/></td>
  <td id="qq"><?php echo $matrice0[$i][2];?></td>
  <td id="dep"><?php echo $matrice0[$i][3];?></td>
  <td><?php echo $matrice0[$i][5];?><br/><?php echo $matrice0[$i][4];?></td>
  <td><?php echo $matrice0[$i][6];?>€</td>
  <td><input type="submit" value="Supprimer du panier achat" /></td>
               </form>
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
   <form method="POST" action="valider_panier_vente.php">
       <tr>
           <th style="font-size:20px">Prix total : <?php echo $total_sale;?>€</th>
            <th><input type="submit" value="Valider Panier Achat" /></th>
        </tr>
   </form>
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
           <th><span id="prix1">Prix</span></th>
           <th><span id="photo1">Photo</span></th>
           <th><span id="quant1">Quantité</span></th>
           <th><span id="region1">Région</span></th>
           <th><span id="description1">Description</span></th>
           <th> </th>
       </tr>
   </thead>
 </table>
 <div id="fon" style="overflow:auto; height: 275px; width: 100%; border: 1px solid orange">
<table id="fond" style="width: 100%;">
 <h3 style="color:red">Votre Panier d'achat est vide</h3>
</table>
</div>
    <!--code html (et css) d'un panier vente vide, les variables et tableaux n'existent pas.-->

<?php }

if($choixE == 1){//panier echange non vide
    ?>
    <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th style="font-size:25"px>Panier Echange</span></th>
        </tr>
    </thead>
</table>
    <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th><span id="prix">Prix</span></th>
           <th><span id="photo">Photo</span></th>
           <th><span id="quant">Quantité</span></th>
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

        //for($i=0;$i<1;$i++){

  ?>
  <form method="POST" action="supr_objet_panier_echange.php">
               <input type="hidden" name="id_prod_panier_echange" value=" <?php echo $matrice1[$i][5]; ?> " />
               <input type="hidden" name="id_prod_on_line" value=" <?php echo $matrice1[$i][6]; ?> " />
               <input type="hidden" name="quantity_panier" value=" <?php echo $matrice1[$i][1]; ?> " />
               <input type="hidden" name="quantity_line" value=" <?php echo $matrice1[$i][7]; ?> " />
  <td><?php echo "Echange";?></td>
  <td id="pho"><img src="<?php echo $matrice1[$i][0];?>"/></td>
  <td id="qq"><?php echo $matrice1[$i][1];?></td>
  <td id="dep"><?php echo $matrice1[$i][2];?></td>
  <td><?php echo $matrice1[$i][4];?><br/><?php echo $matrice1[$i][3];?></td>
  <td><input type="submit" value="Supprimer du panier échange" /></td>
               </form>
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
            <th><input type="submit" value="Valider Panier Echange" /></th>
        </tr>
    </tfoot>
</table>
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
           <th><span id="quant">Quantité</span></th>
           <th><span id="region">Région</span></th>
           <th><span id="description">Description</span></th>
           <th> </th>
       </tr>
   </thead>
 </table>
 <div id="fon" style="overflow:auto; height: 275px; width: 100%; border: 1px solid orange">
<table id="fond" style="width: 100%;">
 <h3 style="color:red">Votre Panier d'echange est vide</h3>
</table>
</div>
    <!--code html (et css) d'un panier echange vide, les variables et tableaux n'existent pas.-->

<?php }
?>