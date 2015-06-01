<?php

session_start();
include("bdd_connect.php");
include('model_supr_panier_vente.php');
include('vue_supr_panier_vente.php');


echo"votre produit a bien été suprimmé";
?>
<br>
<a href="Page_accueil.php"> Accueil </a>