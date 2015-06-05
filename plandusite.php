<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 05/06/2015
 * Time: 09:48
 */
session_start();
?>

<DOCTYPE html>

    <?php
    include("haut_de_page.php");
    include("bdd_connect.php");
    ?>
    <link rel="stylesheet" href="Page_accueil.css" />

    <div id="menu">
        <ul id="onglets">
            <li><a href="Page_accueil.php"> Accueil </a></li>
            <li><a href="Page_achat.php"> Achat </a></li>
            <li><a href="Page_echange.php"> Echange </a></li>
            <li><a href="Pagebio.php"> Bio </a></li>
            <li><a href="Pagepromo.php"> Promo </a></li>
            <li><a href="verif_connect.php"> Ajout produit </a></li>
        </ul>
    </div>

<table>
    <div id="plandusite" style="overflow:none; height: 650px; width: 100%; border: 1px solid orange">

        </br>
        <h1>Plan du site:</h1>

        </br></br>
        <a href="Page_accueil.php"> Accueil </a></br></br>

        <a href="Page_achat.php"> Achat </a></br>
        <a href="Page_echange.php"> Echange </a></br>
        <a href="Pagebio.php"> Bio </a></br>
        <a href="Pagepromo.php"> Promo </a></br>
        <a href="verif_connect.php"> Ajout produit </a></br></br>

        <a href="Page_contact.php">Nous contacter</a></br>
        <a href="plandusite.php">Plan du site</a></br>
        <a href="Reglement.php">Réglement</a></br>
        <a href="page_tarif.php">Tarif</a></br>
        <a href="Forum.php">Forum</a></br>
        <a href="FAQ.php">FAQ</a></br></br>

        <a href="pageprofil.php">Mon profil</a></br>
        <a href="Inscription.php">Page Inscription</a></br>
        <a href="monPanier.php">Mon panier</a></br></br>


     </div>



    </div>
    <?php
    include("footer.php");
    ?>

    </div>
    </body>
    </html>