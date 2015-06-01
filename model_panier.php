<?php


$choixV=0;
$choixE=0;
$reponse1=$bdd->query('SELECT basket_sale_id FROM basket_sale INNER JOIN users ON id_user=user_id WHERE user_email="'.$email.'"');
$reponse1 = $reponse1->fetch();


echo($reponse1['basket_sale_id']);

//panier des achats

if($reponse1['basket_sale_id']!=NULL) {
    echo "votre panier d'achats :";
    ?><br><?php
    $choixV=1;
    $total_sale=0;
    //$tab_sale_nom=array();
    //$tab_sale_photo=array();
    //$tab_sale_price_unit=array();
    //$tab_sale_quantite=array();
    //$tab_sale_dep=array();
    //$tab_sale_prod_desc=array();
    //$tab_sale_price_sous_tot=array();
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

        $bdd->exec('UPDATE product_on_line SET quantity ="'.($reponse2['quantity']-$donnees0['quantity_basket_sale']).'"  WHERE product_on_line_id="' . $donnees0['id_product_on_line'] . '"');

        ?>
        <p>
            type de produit : <?php echo $reponse2['product_name'];?><br>
            photo produit : <img src="<?php echo $reponse2['image'];?>"/><br>
            prix unitaire : <?php echo $reponse2['product_price'];?> euro(s)<br>
            quantite : <?php echo $donnees0['quantity_basket_sale'];?><br>
            region : <?php echo $reponse7['departement_nom'] ;?><br>
            description : <?php echo $reponse2['product_description'];?><br>
            prix sous total total :<?php echo $sous_total;?> euro(s)
        </p>
        <?php
        //$tab_sale_nom[$index0]=$reponse2['product_name'];
        //$tab_sale_photo[$index0]=$reponse2['image'];
        //$tab_sale_price_unit[$index0]=$reponse2['product_price'];
        //$tab_sale_quantite[$index0]=$donnees0['quantity_basket_sale'];
        //$tab_sale_dep[$index0]=$reponse7['departement_nom'];
        //$tab_sale_prod_desc[$index0]=$reponse2['product_description'];
        //$tab_sale_price_sous_tot[$index0]=$sous_total;
        $matrice0[$index0]=array($reponse2['product_price'],$reponse2['image'],$reponse7['departement_nom'],$reponse2['product_description'],$sous_total);
        $index0+=1;


    }$reponse0->closeCursor();
    ?>
    <p>total d'achat : <?php echo $total_sale;?> euro(s)</p>
<?php
}
else{
    echo "panier d'achats vide...";?><br><?php
    $choiV=2;
}


//panier des échanges

$reponse2=$bdd->query('SELECT baket_change_id FROM basket_change INNER JOIN users ON id_user=user_id WHERE user_email="'.$email.'"');
$reponse2 = $reponse2->fetch();
echo($reponse2['baket_change_id']);

if($reponse2['baket_change_id']!= NULL) {
    echo "votre panier d'échanges :";
    ?><br><?php
    $reponse5 = $bdd->query('SELECT * FROM product_in_basket_change INNER JOIN product_on_line ON id_product_on_line=product_on_line_id WHERE id_basket_change="' . $reponse2['baket_change_id'] . '"');
//prix unitaire, photo, region , desc, sous total,
    //$tab_echange_nom=array();
    //$tab_echange_photo=array();
    //$tab_echange_quantite=array();
    //$tab_echange_dep=array();
    //$tab_echange_prod_desc=array();
    $matrice1=array();
    $index1=0;


    while ($donnees5 = $reponse5->fetch()) {

        $reponse4 = $bdd->query('SELECT * FROM product_on_line INNER JOIN product_data ON id_product_date=product_date_id WHERE product_on_line_id="' . $donnees5['id_product_on_line'] . '"');
        $reponse4 = $reponse4->fetch();

        $reponse6 = $bdd->query('SELECT * FROM product_on_line INNER JOIN departement ON id_departement=departement_id WHERE product_on_line_id="' . $donnees5['id_product_on_line'] . '"');
        $reponse6 = $reponse6->fetch();

        $bdd->exec('UPDATE product_on_line SET quantity ="'.($reponse4['quantity']-$donnees5['quantity_basket_change']).'"  WHERE product_on_line_id="' . $donnees5['id_product_on_line'] . '"');
        ?>
        <p>
            type de produit : <?php echo $reponse4['product_name'];?><br>
            photo produit : <img src="<?php echo $reponse4['image'];?>"/><br>
            quantite : <?php echo $donnees5['quantity_basket_change'];?><br>
            region : <?php echo $reponse6['departement_nom'] ;?><br>
            description : <?php echo $reponse4['product_description'];?><br>
        </p>
        <?php
        $matrice1[$index1]=array($reponse4['product_name'],$reponse4['image'],$reponse6['departement_nom'],$reponse4['product_description']);
        //$tab_echange_nom[$index1]=$reponse4['product_name'];
        //$tab_echange_photo[$index1]=$reponse4['image'];
        //$tab_echange_quantite[$index1]=$donnees5['quantity_basket_change'];
        //$tab_echange_dep[$index1]=$reponse6['departement_nom'];
        //$tab_echange_prod_desc[$index1]=$reponse4['product_description'];
        $index1+=1;

    }$reponse5->closeCursor();
    $choixE=1;
}

else{
    echo "panier d'échanges vide...";
    $choixE=2;
}
echo $matrice0[0][0];

