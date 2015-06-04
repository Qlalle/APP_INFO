<?php session_start();?>

<DOCTYPE html>

  <?php
    include("haut_de_page.php");
    include("bdd_connect.php");
  ?>
    <link rel="stylesheet" href="transaction.css" />

 <div id="corps" style="overflow:auto; height: 725px; width: 1178px; border: 1px solid orange">
<h1> Transaction en cour</h1>
<h3>Mr michel</h3>
<table style="overflow:auto; height: 50px; width: 98%; border: 1px solid orange">
  <thead>
    <tr>
      <th><span>Produit</span></th>
      <th><span>Sous-total</span></th>
    </tr>
  </thead>
  </table>
  <div id="fon" style="overflow:auto; height: 275px; width: 1152px; border: 1px solid orange">
    <table id="fond" style="width: 100%;">
    <tbody>
      <tr>
        <td>&#45;&nbsp;produit</td>
        <td>prix</td>
      </tr>
    </tbody>
  </table>
    </div>
    <table style="overflow:none; height: 50px; width: 100%; border: 1px solid orange">
   <tfoot> 
      <tr>
      <td>Total</td>
    </tr>
    </tfoot>
  </table>

 <p>
      <a href="page_accueil.php">retour accueil</a>
  </p>
  </div>
</html>