<?php

    $email=$_SESSION['user_email'];
$var0=$_POST['id_prod_panier_echange'];
$var1=$_POST['id_prod_on_line'];


$new_quantity=$_POST['quantity_line']+$_POST['quantity_panier'];

$bdd->exec('UPDATE product_on_line SET quantity ="'.$new_quantity.'"  WHERE product_on_line_id="'.$_POST['id_prod_on_line'].'"');
//echo $new_quantity."=".$_POST['quantity_line']."+".$_POST['quantity_panier'];
$bdd->exec('DELETE FROM product_in_basket_change WHERE product_in_basket_change_id="'.$_POST['id_prod_panier_echange'].'"');

$reponse9=$bdd->query('SELECT baket_change_id FROM basket_change INNER JOIN users ON id_user=user_id WHERE user_email="'.$email.'"');
$reponse9= $reponse9->fetch();

$reponse8=$bdd->query('SELECT product_in_basket_change_id FROM basket_change INNER JOIN product_in_basket_change ON id_basket_change=baket_change_id WHERE baket_change_id="'.$reponse9['baket_change_id'].'"');
$reponse8= $reponse8->fetch();

if($reponse8['product_in_basket_change_id']==NULL){
    $bdd->exec('DELETE FROM basket_change WHERE baket_change_id="'.$reponse9['baket_change_id'].'"');
}