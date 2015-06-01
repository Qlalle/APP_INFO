<?php
session_start();
include("bdd_connect.php");


$email=$_SESSION['user_email'];
?>

<h1>BONJOUR <?php echo($email) ?> !!!</h1><h1>VLA TA BARQUETTE !</h1><?php

include("model_panier.php");
include("vue_panier.php");
?>
</br>
</br>
<a href="Page_accueil.php"> Accueil </a>



