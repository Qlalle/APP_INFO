<?php
session_start();
include("bdd_connect.php");

$email=$_SESSION['user_email'];

include("model_panier.php");

//echo $index0;
//enregistrer données dans "historique_achat" avec validation=0

    //création histo
$message='Votre panier a ete valider';

    echo '<script type="text/javascript">window.alert("'.$message.'"); window.location.href="Page_accueil.php";</script>';



$reponsea=$bdd->query('SELECT user_id FROM users WHERE user_email="'.$email.'"');
$reponsea = $reponsea->fetch();

$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
try {

    $requete = $bdd->prepare('INSERT INTO historique_achat VALUES (NULL,CURDATE(),:id_user,:total_achat,:activation)');
    if (!$requete) {
        print_r($bdd->errorInfo());
    }
    $requete->execute(array(
        'id_user'=>$reponsea['user_id'],
        'total_achat'=>$total_sale,
        'activation'=>0
    ));
} catch (PDOException $e) {
    echo $e->getMessage();
}

    //remplissage histo

$reponseb=$bdd->query('SELECT historique_achat_id FROM historique_achat WHERE id_user="'.$reponsea['user_id'].'" ORDER BY historique_achat_id DESC');
$reponseb = $reponseb->fetch();

//echo $index0;
for($i=0;$i<$index0;$i++) {

    //$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {

        $requete1 = $bdd->prepare('INSERT INTO produit_dans_historique_achat VALUES (NULL,:id_historique_achat,:quantite_d_achat,:nom_produit,:id_vendeur,:prix_unitaire,:activation,NULL)');
        if (!$requete1) {
            print_r($bdd->errorInfo());
        }
        $requete1->execute(array(
            'id_historique_achat' => $reponseb['historique_achat_id'],
            'quantite_d_achat' => $matrice0[$i][2],
            'nom_produit' => $matrice0[$i][5],
            'id_vendeur' => $matrice0[$i][11],
            'prix_unitaire' => $matrice0[$i][0],
            'activation' =>0
        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

//créer warnings aux vendeurs

    //créer les panier warning


$tab=array(); //tableau contenant les id des different vendeur
$indexa=0;
$reponsec=$bdd->query('SELECT id_vendeur FROM produit_dans_historique_achat GROUP BY id_vendeur');
while ($donneesc = $reponsec->fetch()) {
    $tab[$indexa]=$donneesc['id_vendeur'];
    $indexa+=1;
}$reponsec->closeCursor();

$nb_case=count($tab);
$indexb=0;

/*$reponsed=$bdd->query('SELECT historique_achat_id FROM historique_achat WHERE id_user="'.$reponsea['user_id'].'"');
while( $donneesd = $reponsed->fetch()){

}$reponsed->closeCursor();*/

for($i=0;$i<$nb_case;$i++) {

    //$tab[$i];


    //$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {

        $requete2 = $bdd->prepare('INSERT INTO warning_box_sale VALUES (NULL,:validation,:id_user_vendeur,:id_user_acheteur,NOW())');
        if (!$requete2) {
            print_r($bdd->errorInfo());
        }
        $requete2->execute(array(
            'validation' => 0,
            'id_user_vendeur' => $tab[$indexb],
            'id_user_acheteur' => $reponsea['user_id']
        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $indexb+=1;
}












    //remplir les paniers warning

$tab0=array();//
$indexc=0;
$indexd=0;

echo "nombre vendeur :   ".$nb_case;?><br><br><?php
for($i=0;$i<$nb_case;$i++) {


    // attention ! ! ! $reponsed n'est pas la bonne requete, il faut juste requeter sur les produits dans panier et pas sur l'historique.

    $reponsed=$bdd->query('SELECT * FROM product_in_basket_sale INNER JOIN basket_sale ON id_basket_sale=basket_sale_id INNER JOIN product_on_line ON id_product_on_line=product_on_line_id WHERE id_saler="'.$tab[$i].'" AND id_user="'.$reponsea['user_id'].'"');
    while ($donneesd = $reponsed->fetch()) {

        $reponsef=$bdd->query('SELECT product_name FROM product_on_line INNER JOIN product_data ON product_date_id=id_product_date WHERE product_on_line_id="'.$donneesd['id_product_on_line'].'"');
        $reponsef = $reponsef->fetch();

        $sous_total0=$donneesd['quantity_basket_sale']*$donneesd['product_price'];
        $tab0[$indexd]=array($reponsef['product_name'],$donneesd['quantity_basket_sale'],$sous_total0);
        $indexd+=1;
    }$reponsed->closeCursor();


    /*$reponsed=$bdd->query('SELECT * FROM produit_dans_historique_achat INNER JOIN historique_achat ON id_historique_achat=historique_achat_id WHERE id_vendeur="'.$tab[$i].'" AND id_user="'.$reponsea['user_id'].'"');
    while ($donneesd = $reponsed->fetch()) {
        $sous_total0=$donneesd['quantite_d_achat']*$donneesd['prix_unitaire'];
        $tab0[$indexd]=array($donneesd['nom_produit'],$donneesd['quantite_d_achat'],$sous_total0);
        $indexd+=1;
    }$reponsed->closeCursor();*/

    $indexd=0;
    $taille=count($tab0);

    echo "nombre produit :   ".$taille;?><br><br><?php

    $reponsee=$bdd->query('SELECT warning_box_sale_id FROM warning_box_sale WHERE id_user_vendeur="'.$tab[$i].'" ORDER BY warning_box_sale_id DESC');
    $reponsee = $reponsee->fetch();

    for($k=0;$k<$taille;$k++) {
        echo $tab0[$k][0];?><br><?php
        echo $tab0[$k][1];?><br><?php
        echo $tab0[$k][2];?><br><?php
    }?><br><?php



    for($j=0;$j<$taille;$j++){



        //$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {

            $requete2 = $bdd->prepare('INSERT INTO warning_in_box_sale VALUES (NULL,:id_box_sale,:prod_nom,:quantite_produit,:sous_total)');
            if (!$requete2) {
                print_r($bdd->errorInfo());
            }
            $requete2->execute(array(
                'id_box_sale' => $reponsee['warning_box_sale_id'],
                'prod_nom' => $tab0[$j][0],
                'quantite_produit' => $tab0[$j][1],
                'sous_total' => $tab0[$j][2]
            ));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        //$indexd += 1;
        $reponseh=$bdd->query('SELECT * FROM warning_in_box_sale INNER JOIN warning_box_sale ON id_box_sale=warning_box_sale_id ORDER BY warning_in_box_sale_id DESC');
        $reponseh = $reponseh->fetch();

        $bdd->exec('UPDATE produit_dans_historique_achat SET id_warning_in_box ="'.$reponseh['warning_in_box_sale_id'].'"  WHERE id_vendeur="'.$reponseh['id_user_vendeur'].'" AND quantite_d_achat="'.$reponseh['quantite_produit'].'" AND nom_produit="'.$reponseh['prod_nom'].'"');
    }
    $indexc += 1;
}
?><br><?php
echo "fin d'action";

//envoyer mail

require_once('class.phpmailer.php');
require_once('class.SMTP.php');



for($i=0;$i<$nb_case;$i++) {

    $reponseg=$bdd->query('SELECT * FROM users WHERE user_id="'.$tab[$i].'"');
    $reponseg = $reponseg->fetch();

    $mail = new PHPMailer();

    $msg = '<html>
          <body>
            <p><b>Bonjour '.$reponseg['user_firstname'].' </b></p></br>
            <p><b>Vous avez des produits vendu en attente de traitement</b></p></br>
            <p>Vous devez vous connecter au plus vite et vous rendre dans votre espace -transaction en cours- pour finaliser la transaction</p>
            </br></br>
            <p>Cordialement,</p><br>
            <p>l equipe Bio&Bon</p>
            </br></br>
          </body>
        </html>';
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "bioetbon.isep@gmail.com";
    $mail->Password = "bioetbon";
    $mail->CharSet = "utf-8";
    $mail->SetFrom($reponseg['user_email']);
    $mail->Subject = 'notification achat sur Bio&Bon'; ?> </br> <?php
    $mail->Body = $msg;
    $mail->AddAddress('quentin.lalle@gmail.com');
    //$mail->AddCC($to, $Prenom);
    /**/


    if (!$mail->Send()) {
        echo "Echec de l'envoi du mail, Erreur: " . $mail->ErrorInfo;
    } else {
        ?>
        <div align="center"><h3 class="ok"><strong><?php echo "Message envoye!"; ?></strong></h3></div> <?php
    }
}

unset($mail);



//supprimer panier


            // sql to delete a record
$sql = 'DELETE FROM basket_sale WHERE id_user='.$reponsea['user_id'].'';

            // use exec() because no results are returned
$bdd->exec($sql);
