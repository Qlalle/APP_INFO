<?php

//include("haut_de_page.php");

/*---------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
        PANIER VENTE

        $tab_sale_nom               =>  tableau contenant les nom des produits "vente" dans le panier achat de l'utilisateur
        $tab_sale_photo             =>  tableau contenant l'adresse photo des produits "vente" dans le panier achat de l'utilisateur
        $tab_sale_price_unit        =>  tableau contenant le prix unitaire des produits "vente" dans le panier achat de l'utilisateur
        $tab_sale_quantite          =>  tableau contenant la quantité des produits "vente" dans le panier achat de l'utilisateur
        $tab_sale_dep               =>  tableau contenant le département des produits "vente" dans le panier achat de l'utilisateur
        $tab_sale_prod_desc         =>  tableau contenant la description des produits "vente" dans le panier achat de l'utilisateur
        $tab_sale_price_sous_tot    =>  tableau contenant le sous total des produits "vente" dans le panier achat de l'utilisateur
        $total_sale                 =>  prix totale du panier vente

        PANIER ECHANGE

        $tab_echange_nom            =>  tableau contenant les nom des produits "echange" dans le panier echange de l'utilisateur
        $tab_echange_photo          =>  tableau contenant l'adresse photo des produits "echange" dans le panier echange de l'utilisateur
        $tab_echange_quantite       =>  tableau contenant la quantité des produits "echange" dans le panier echange de l'utilisateur
        $tab_echange_dep            =>  tableau contenant le département des produits "echange" dans le panier echange de l'utilisateur
        $tab_echange_prod_desc      =>  tableau contenant la description des produits "echange" dans le panier echange de l'utilisateur

-----------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------*/

if($choixV == 1){//panier achat non vide

    echo "choixV1";?>
<h1>1</h1>
    <!--code html (et css) d'un panier vente ou il y a quelques chose, on utilise alors les tableaux et les données cités précédement dans la partie "PANIER VENTE"-->

    <!--<form method="POST" action="validation_panier_achat.php">

    </form>-->

<?php}

else{//panier achat vide
    echo "choix2";?>
<h1>2</h1>
    <!--code html (et css) d'un panier vente vide, les variables et tableaux n'existent pas.-->

<?php}

if($choixE == 1){//panier echange non vide
    echo "choix3";?>
<h1>3</h1>
    <!--code html (et css) d'un panier echange ou il y a quelques chose, on utilise alors les tableaux et les données cités précédement dans la partie "PANIER ECHANGE"-->
    <!--<form method="POST" action="validation_panier_echange.php">

    </form>-->
<?php}

else{//panier echange vide
    echo "choix4";?>
<h1>4</h1>
    <!--code html (et css) d'un panier echange vide, les variables et tableaux n'existent pas.-->

<?php}
echo "hello world !";