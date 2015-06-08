<?php
session_start();
include("bdd_connect.php");

$email=$_SESSION['user_email'];

$id_warning_box=$_POST['id_warning_box_sale'];

echo $id_warning_box;

/*$reponsek=$bdd->query('SELECT warning_in_box_sale_id FROM warning_in_box_sale INNER JOIN warning_box_sale ON id_box_sale=warning_box_sale_id WHERE ="'..'"');
$reponsek = $reponsek->fetch();

$reponsej=$bdd->query('SELECT table_id FROM produit_dans_historique_achat WHERE id_warning_in_box="'..'"');
$reponsej = $reponsej->fetch();*/


$tableau=array();
$indexphp=0;

$reponsek=$bdd->query('SELECT * FROM warning_in_box_sale INNER JOIN warning_box_sale ON id_box_sale=warning_box_sale_id WHERE id_box_sale='.$id_warning_box);
while ($donneesk = $reponsek->fetch()) {

$tableau[$indexphp]=array($donneesk['warning_in_box_sale_id'],$donneesk['warning_box_sale_id']);

$indexphp++;
}
$reponsek->closeCursor();

$tailletab=count($tableau);

for($i=0;$i<$tailletab;$i++){
    $reponsej=$bdd->query('SELECT table_id, id_historique_achat FROM produit_dans_historique_achat WHERE id_warning_in_box="'.$tableau[$i][0].'"');
    $reponsej = $reponsej->fetch();

    $bdd->exec('UPDATE produit_dans_historique_achat SET validation =1 WHERE table_id="'.$reponsej['table_id'].'"');
    $bdd->exec('UPDATE historique_achat SET validation =1 WHERE historique_achat_id="'.$reponsej['id_historique_achat'].'"');

    $reponsel=$bdd->query('SELECT table_id FROM historique_achat INNER JOIN produit_dans_historique_achat WHERE id_warning_in_box="'.$tableau[$i][0].'"');
    $reponsel = $reponsel->fetch();
}

//$reponsej=$bdd->query('SELECT table_id FROM produit_dans_historique_achat WHERE id_warning_in_box="'..'"');
//$reponsej = $reponsej->fetch();


