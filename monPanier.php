<?php
session_start();
include("bdd_connect.php");

$email="jb@gmail.com";

?>

<h1>BONJOUR <?php echo($email) ?> !!!</h1><h1>VLA TA BARQUETTE !</h1><?php

$reponse1=$bdd->query('SELECT basket_sale_id FROM basket_sale INNER JOIN users ON id_user=user_id WHERE user_email="'.$email.'"');
$reponse1 = $reponse1->fetch();
echo($reponse1['basket_sale_id']);




//panier des achats

if($reponse1['basket_sale_id']!=NULL) {
    echo "votre panier d'achats :";
    ?><br><?php
    $reponse0 = $bdd->query('SELECT * FROM product_in_basket_sale INNER JOIN product_on_line ON id_product_on_line=product_on_line_id WHERE id_basket_sale="' . $reponse1['basket_sale_id'] . '"');

    while ($donnees0 = $reponse0->fetch()) {
        $reponse2 = $bdd->query('SELECT * FROM product_data INNER JOIN product_on_line ON id_product_date=product_date_id WHERE product_on_line_id="' . $donnees0['id_product_on_line'] . '"');
        $reponse2 = $reponse2->fetch();
        ?>
        <p>
            type de produit : <?php echo $reponse2['product_name'];?><br>
            quantite : <?php echo $donnees0['quantity_basket_sale'];?><br>
        </p>
    <?php
    }$reponse0->closeCursor();

}
else{
    echo "panier d'achats vide...";?><br><?php
}
//panier des échanges

$reponse2=$bdd->query('SELECT baket_change_id FROM basket_change INNER JOIN users ON id_user=user_id WHERE user_email="'.$email.'"');
$reponse2 = $reponse2->fetch();
echo($reponse2['baket_change_id']);

if($reponse2['baket_change_id']!= NULL) {
    echo "votre panier d'échanges :";
    ?><br><?php
    $reponse5 = $bdd->query('SELECT * FROM product_in_basket_change INNER JOIN product_on_line ON id_product_on_line=product_on_line_id WHERE id_basket_change="' . $reponse2['baket_change_id'] . '"');

    while ($donnees5 = $reponse5->fetch()) {
        $reponse4 = $bdd->query('SELECT * FROM product_data INNER JOIN product_on_line ON id_product_date=product_date_id WHERE product_on_line_id="' . $donnees5['id_product_on_line'] . '"');
        $reponse4 = $reponse4->fetch();
        ?>
        <p>
            type de produit : <?php echo $reponse4['product_name'];?><br>
            quantite : <?php echo $donnees5['quantity_basket_change'];?><br>
        </p>
    <?php
    }$reponse5->closeCursor();
}
else{
    echo "panier d'échanges vide...";
}

//prix, photo, quantité, région, description avec un total à la fin
    //retiré quantité de produit-on_line quand on ajoute au panier