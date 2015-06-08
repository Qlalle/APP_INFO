<DOCTYPE html>
  <?php
    include("haut_de_page.php");
  ?>
    <link rel="stylesheet" href="vue_transaction.css" />

            <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th style="font-size:25px">Transaction en cours</th>
        </tr>
    </thead>
     </table>

<?php
        for($i=0;$i<$taille;$i++){
           ?>
    <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           
           <th style="font-size:20px">Identité acheteur : <?php echo $tab[$i][2];?>&nbsp;&nbsp;&nbsp;<?php echo $tab[$i][1];?></th>
          </tr>
    </thead>
     </table>
     <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th id="pro">Produit</th>
           <th id="quant">Quantité</th>
           <th id="price">Sous-total</th>
        </tr>
    </thead>
     </table>
<?php
    
    //div
    for($j=0;$j<${"taille".$i};$j++){

            //$i : n° tableau; $j : le n° de la ligne(chaque ligne correspond à un produit); $k : le n° de la colonne (chaque colonne correspond à une information du produit de cette ligne)
            ?>
            <table style="overflow:auto; height: 50px; width: 100%">
   <tbody> <!-- En-tête du tableau -->
       <tr>
           <td id="prod"> <?php echo ${"tab".$i}[$j][0];?></td>
           <td id="qt"> <?php echo ${"tab".$i}[$j][1];?></td>
           <td id="prix"> <?php echo ${"tab".$i}[$j][2];?>€</td>
        </tr>
        <?php
  }
  ?>
    </tbody>
     </table>
        
<table style="overflow:auto; height: 50px; width: 100%">
  <tfoot>
  <form method="POST" action="valider_transaction.php">
    <tr>
        <input type="hidden" name="id_warning_box_sale" value=" <?php echo $tab[$i][0]; ?> " />

        <th><input type="submit" value="Valider la transaction" /></th>
    </tr>
</form>
</tfoot>
</table>
<?php
    }
?>

