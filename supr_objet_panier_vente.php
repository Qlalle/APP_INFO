<?php

session_start();
include("bdd_connect.php");
$email=$_SESSION['user_email'];
$var0=$_POST['id_prod_panier_achat'];
$var1=$_POST['id_prod_on_line'];
echo $var0;
echo "     ";
$new_quantity=$_POST['quantity_line']+$_POST['quantity_panier'];

$bdd->exec('UPDATE product_on_line SET quantity ="'.$new_quantity.'"  WHERE product_on_line_id="'.$_POST['id_prod_on_line'].'"');
echo $new_quantity."=".$_POST['quantity_line']."+".$_POST['quantity_panier'];
$bdd->exec('DELETE FROM product_in_basket_sale WHERE product_in_basket_sale_id="'.$_POST['id_prod_panier_achat'].'"');

$reponse9=$bdd->query('SELECT basket_sale_id FROM basket_sale INNER JOIN users ON id_user=user_id WHERE user_email="'.$email.'"');
$reponse9 = $reponse9->fetch();

$reponse8=$bdd->query('SELECT product_in_basket_sale_id FROM basket_sale INNER JOIN product_in_basket_sale ON id_basket_sale=basket_sale_id WHERE basket_sale_id="'.$reponse9['basket_sale_id'].'"');
$reponse8 = $reponse8->fetch();

if($reponse8['product_in_basket_sale_id']==NULL){
    $bdd->exec('DELETE FROM basket_sale WHERE basket_sale_id="'.$reponse9['basket_sale_id'].'"');
}