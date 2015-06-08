<DOCTYPE html>
  <?php
    include("haut_de_page.php");
  ?>
    <link rel="stylesheet" href="vue_histoachat.css" />

            <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th style="font-size:25px">Historique achat</th>
            </tr>
    </thead>
     </table>
    
     <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Date achat</th>
           <th>Produit</th>
           <th>Sous-total</th>
           <th>Quantité</th>
           <th>Email vendeur</th>
        </tr>
    </thead>
     </table>
    <?php
for($i=0;$i<$taille;$i++){
    ?>
    <table style="overflow:auto; height: 20px; width: 100%">
        <thead>
            <tr>
    <td id="date"><?php echo $tab_histo[$i][1];?></td>
            </tr>
        </thead>
    </table>
<?php
    //div
    for($j=0;$j<${"taille".$i};$j++){
       
            //$i : n° tableau; $j : le n° de la ligne(chaque ligne correspond à un produit); $k : le n° de la colonne (chaque colonne correspond à une information du produit de cette ligne)
            ?>
           <div id="fon" style="overflow:auto; height: 50px; width: 100%">
<table style="width: 100%;">
   <tbody> <!-- En-tête du tableau -->
       <tr>
            <td id="prod"><?php echo ${"tab".$i}[$j][0];?></td>
            <td id="qt"><?php echo ${"tab".$i}[$j][1];?></td>
            <td id="prix"><?php echo ${"tab".$i}[$j][2];?>€/kg</td>
            <td id="mail"><?php echo ${"tab".$i}[$j][3];?></td>
        </tr>
    </tbody>
</table>
          </div>
<?php
    }
}
?>
<div id="fon" style="overflow:auto; height: 575px; width: 100%">
    </div>