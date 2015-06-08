<?php
session_start();
include("bdd_connect.php");

$email=$_SESSION['user_email'];

$reponsea=$bdd->query('SELECT user_id FROM users WHERE user_email="'.$email.'"');
$reponsea = $reponsea->fetch();

$tab=array();
$indexa=0;
$tot=0;

$reponsea=$bdd->query('SELECT * FROM warning_box_sale WHERE id_user_vendeur="'.$reponsea['user_id'].'" AND validation=0');
while ($donneesa = $reponsea->fetch()) {

    $reponsec=$bdd->query('SELECT user_email, user_firstname FROM users WHERE user_id="'.$donneesa['id_user_acheteur'].'"');
    $reponsec = $reponsec->fetch();

    $tab[$indexa]=array($donneesa['warning_box_sale_id'],$reponsec['user_email'],$reponsec['user_firstname'],$donneesa['date_warning'],$tot);
    $indexa++;

}$reponsea->closeCursor();

$taille=count($tab);

for($i=0;$i<$taille;$i++) {

    $index_prod=0;

    $debut="tab";
    $var=$debut.$i;
    ${$var}=array();

    $deb="taille";
    $varia=$deb.$i;
    ${$varia}=0;

    $reponseb = $bdd->query('SELECT * FROM warning_in_box_sale WHERE id_box_sale="'.$tab[$i][0].'"');
    while ($donneesb = $reponseb->fetch()) {

       //$reponsed=$bdd->query('SELECT user_email FROM users WHERE user_id="'.$donneesb['id_vendeur'].'"');
        //$reponsed = $reponsed->fetch();

        ${$var}[$index_prod]=array($donneesb['prod_nom'],$donneesb['quantite_produit'],$donneesb['sous_total']);
                                       //0                           1                               2
        $index_prod += 1;
        $tab[$i][3]+=$donneesb['sous_total'];
    }
    $reponseb->closeCursor();

    ${$varia}=count(${$var});
}


include("vuetransactionencours.php");

?>
