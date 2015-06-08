<?php
session_start();
include("bdd_connect.php");


$email=$_SESSION['user_email'];


include("model_panier.php");
include("vue_panier.php");
?>



