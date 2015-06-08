<?php
session_start();
include("bdd_connect.php");

$email=$_SESSION['user_email'];

$reponsea=$bdd->query('SELECT user_id FROM users WHERE user_email="'.$email.'"');
$reponsea = $reponsea->fetch();

$id_user=$reponsea['user_id'];
$tab_histo=array();
$index_tab_histo=0;

$reponsec=$bdd->query('SELECT * FROM historique_achat WHERE id_user="'.$id_user.'" AND activation=1');
while ($donneesc= $reponsec->fetch()){

    $tab_histo[$index_tab_histo]=array($donneesc['historique_achat_id'],$donneesc['date_achat'],$donneesc['total_achat']);
    $index_tab_histo++;

}
$taille=count($tab_histo);

//$tab=array();

for($i=0;$i<$taille;$i++) {

    $index_prod=0;

    $debut="tab";
    $var=$debut.$i;
    ${$var}=array();

    $deb="taille";
    $varia=$deb.$i;
    ${$varia}=0;

    $reponseb = $bdd->query('SELECT * FROM produit_dans_historique_achat WHERE id_historique_achat="'.$tab_histo[$i][0].'" AND activation=1');
    while ($donneesb = $reponseb->fetch()) {

        //$reponsef = $bdd->query('SELECT product_name FROM product_on_line INNER JOIN product_data ON product_date_id=id_product_date WHERE product_on_line_id="' . $donneesd['id_product_on_line'] . '"');
        //$reponsef = $reponsef->fetch();
        $sous_tot=$donneesb['quantite_d_achat']*$donneesb['prix_unitaire'];

        $reponsed=$bdd->query('SELECT user_email FROM users WHERE user_id="'.$donneesb['id_vendeur'].'"');
        $reponsed = $reponsed->fetch();

        ${$var}[$index_prod]=array($donneesb['nom_produit'],$donneesb['quantite_d_achat'],$sous_tot,$reponsed['user_email']);
                                          //0                               1                     2              3
        $index_prod += 1;
    }
    $reponseb->closeCursor();
    ${$varia}=count(${$var});
    //echo $tab0[0][0]."          ".$tab0[1][0];
}



//////////////////////////////////////////////////////////////////////////////////////////////


for($i=0;$i<$taille;$i++){
    echo $tab_histo[$i][1];?><br><?php
    //div
    for($j=0;$j<${"taille".$i};$j++){
        for($k=0;$k<4;$k++){
            //$i : n° tableau; $j : le n° de la ligne(chaque ligne correspond à un produit); $k : le n° de la colonne (chaque colonne correspond à une information du produit de cette ligne)
            ?>
            <h1> <?php echo ${"tab".$i}[$j][$k];?></h1>
            <br><?php
        }?><br><?php
    }?><br><?php
    //fin du div
}
