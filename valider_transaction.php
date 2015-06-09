<?php
session_start();
include("bdd_connect.php");

$email=$_SESSION['user_email'];

$id_warning_box=$_POST['id_warning_box_sale'];

$message='Votre transaction a bien ete valide';

    echo '<script type="text/javascript">window.alert("'.$message.'"); window.location.href="Page_accueil.php";</script>';

$tableau=array();
$indexphp=0;

$reponsek=$bdd->query('SELECT * FROM warning_in_box_sale INNER JOIN warning_box_sale ON id_box_sale=warning_box_sale_id WHERE id_box_sale='.$id_warning_box);
while ($donneesk = $reponsek->fetch()) {

$tableau[$indexphp]=array($donneesk['warning_in_box_sale_id'],$donneesk['id_box_sale']);

$indexphp++;
}
$reponsek->closeCursor();

$tailletab=count($tableau);



for($i=0;$i<$tailletab;$i++){
    echo $tableau[$i][0];?><br><?php
    echo $tableau[$i][1];?><br><?php

}

//------------------------------------------------------------------------------------problème ci-dessous

for($i=0;$i<$tailletab;$i++){
    $reponsej=$bdd->query('SELECT * FROM produit_dans_historique_achat WHERE id_warning_in_box="'.$tableau[$i][0].'"');
    $reponsej = $reponsej->fetch();?><br><?php

    $bdd->exec('UPDATE produit_dans_historique_achat SET activation =1 WHERE table_id="'.$reponsej['table_id'].'"');
    $bdd->exec('UPDATE historique_achat SET activation =1 WHERE historique_achat_id="'.$reponsej['id_historique_achat'].'"');
    $bdd->exec('UPDATE warning_box_sale SET validation =1 WHERE warning_box_sale_id="'.$tableau[$i][1].'"');

    $reponsel=$bdd->query('SELECT table_id FROM historique_achat INNER JOIN produit_dans_historique_achat WHERE id_warning_in_box="'.$tableau[$i][0].'"');
    $reponsel = $reponsel->fetch();
}



/////////////

// dire qu'il faut afficher les warning que s'il sont actif
//remplire l'histo transactio
//tableau histo transaction pour la vue

$tableau=array();
$indexo=0;

$reponsem=$bdd->query('SELECT * FROM warning_in_box_sale INNER JOIN warning_box_sale ON id_box_sale=warning_box_sale_id WHERE id_box_sale='.$id_warning_box);
while ($donneesm = $reponsem->fetch()) {

    $tableau[$indexo]=array($donneesm['prod_nom'], $donneesm['quantite_produit'], $donneesm['sous_total'], $donneesm['id_user_vendeur'], $donneesm['id_user_acheteur'], $donneesm['date_warning']);
    $indexo++;  //                    0                           1                             2                           3                           4                           5
}

$taille=count($tableau);

$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

for($i=0;$i<$taille;$i++){

    $reponsen=$bdd->query('SELECT user_id FROM users WHERE user_email="'.$email.'"');
    $reponsen = $reponsen->fetch();

    try {

        $requete = $bdd->prepare('INSERT INTO historique_proposition VALUES (NULL,:quantite_product,:sale_or_change,:quality,:id_user,:sous_total,:id_acheteur,:nom_prod,:date_warning)');
        if (!$requete) { //                                                     1          2                3             4     5         6            7           8           9
            print_r($bdd->errorInfo());
        }
        $requete->execute(array(
            'quantite_product' => $tableau[$i][1],
            'sale_or_change' => 0,
            'quality' => 0,
            'id_user' => $reponsen['user_id'],
            'sous_total'=> $tableau[$i][2],
            'id_acheteur'=>$tableau[$i][4],
            'nom_prod'=>$tableau[$i][0],
            'date_warning'=>$tableau[$i][5]
        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
$bdd->exec('DELETE FROM warning_box_sale WHERE warning_box_sale_id='.$id_warning_box);


//$reponsej=$bdd->query('SELECT table_id FROM produit_dans_historique_achat WHERE id_warning_in_box="'..'"');
//$reponsej = $reponsej->fetch();


