<?php

$choixV=0;
$choixE=0;
$reponse1=$bdd->query('SELECT basket_sale_id FROM basket_sale INNER JOIN users ON id_user=user_id WHERE user_email="'.$email.'"');
$reponse1 = $reponse1->fetch();



//panier des achats

if($reponse1['basket_sale_id']!=NULL) {
    $total_sale=0;
    $matrice0=array();
    $index0=0;

    $reponse0 = $bdd->query('SELECT * FROM product_in_basket_sale INNER JOIN product_on_line ON id_product_on_line=product_on_line_id WHERE id_basket_sale="' . $reponse1['basket_sale_id'] . '"');

    while ($donnees0 = $reponse0->fetch()) {

        $reponse2 = $bdd->query('SELECT * FROM product_data INNER JOIN product_on_line ON id_product_date=product_date_id WHERE product_on_line_id="' . $donnees0['id_product_on_line'] . '"');
        $reponse2 = $reponse2->fetch();

        $reponse7 = $bdd->query('SELECT * FROM product_on_line INNER JOIN departement ON id_departement=departement_id WHERE product_on_line_id="' . $donnees0['id_product_on_line'] . '"');
        $reponse7 = $reponse7->fetch();

        $sous_total = ($reponse2['product_price'])*($donnees0['quantity_basket_sale']);
        $total_sale+=$sous_total;

        //$bdd->exec('UPDATE product_on_line SET quantity ="'.($reponse2['quantity']-$donnees0['quantity_basket_sale']).'"  WHERE product_on_line_id="' . $donnees0['id_product_on_line'] . '"');

        ?>
        <?php
        $matrice0[$index0]=array($reponse2['product_price'],$reponse2['image'],$donnees0['quantity_basket_sale'],$reponse7['departement_nom'],$reponse2['product_description'],$reponse2['product_name'],$sous_total,$donnees0['product_in_basket_sale_id'],$reponse7['product_on_line_id'],$reponse7['quantity']);
        $index0+=1;


    }$reponse0->closeCursor();
    $choixV=1;
    ?>
<?php
    //echo $matrice0[0][0];
}
else{

    $choixV=2;
}


//panier des échanges

$reponse2=$bdd->query('SELECT baket_change_id FROM basket_change INNER JOIN users ON id_user=user_id WHERE user_email="'.$email.'"');
$reponse2 = $reponse2->fetch();

if($reponse2['baket_change_id']!= NULL) {
    $reponse5 = $bdd->query('SELECT * FROM product_in_basket_change INNER JOIN product_on_line ON id_product_on_line=product_on_line_id WHERE id_basket_change="' . $reponse2['baket_change_id'] . '"');
    $matrice1=array();
    $index1=0;


    while ($donnees5 = $reponse5->fetch()) {

        $reponse4 = $bdd->query('SELECT * FROM product_data INNER JOIN product_on_line ON id_product_date=product_date_id WHERE product_on_line_id="'  . $donnees5['id_product_on_line'] . '"');
        $reponse4 = $reponse4->fetch();

        $reponse6 = $bdd->query('SELECT * FROM product_on_line INNER JOIN departement ON id_departement=departement_id WHERE product_on_line_id="' . $donnees5['id_product_on_line'] . '"');
        $reponse6 = $reponse6->fetch();

        $bdd->exec('UPDATE product_on_line SET quantity ="'.($reponse4['quantity']-$donnees5['quantity_basket_change']).'"  WHERE product_on_line_id="' . $donnees5['id_product_on_line'] . '"');
        ?>
        <?php
        $matrice1[$index1]=array($reponse4['image'],$donnees5['quantity_basket_change'],$reponse6['departement_nom'],$reponse4['product_description'],$reponse4['product_name']);
        $index1+=1;

    }$reponse5->closeCursor();
    $choixE=1;
}

else{
    echo "panier d'échanges vide";
    $choixE=2;
}

?>

