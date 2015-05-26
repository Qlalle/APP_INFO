<?php session_start();?>
<DOCTYPE html>
<?php
include("haut_de_page.php");
?>

    <link rel="stylesheet" href="page tarif.css" />

    <div id="menu">
  <ul id="onglets">
    <li><a href="Page_d'accueil.php"> Accueil </a></li>
    <li><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li><a href="Pagepromo.php"> Promo </a></li>
    <li><a href="Page_vente.php"> Vente </a></li>
  </ul>
</div>

    

    <div id="pagetarif" style="overflow:auto; height: 600px; width: 100%; border: 1px solid orange">
      <h3 id="titre1"> PAYEZ EN TOUTE SÉCURITÉ !</h3>
      <img src="paiement_img.jpg" class="images_centre" />
      <h4>Pour vous simplifier la vie et répondre au plus près à l'ensemble de vos besoins, nous vous proposons un large choix de modes de paiement 100% sécurisé.</h4>
      <h3 id="titre2">PAIEMENT PAR CARTE BANCAIRE </h3>
      <img src="cartes.jpg" class="images_centre"/>
      <h4>Le paiement par Carte Bancaire (Visa, MasterCard, Carte Bleue et American Express) est accessible pour l'ensemble de vos commandes réalisées sur www.bioetbon.com.</h4>
      <h3 id="titre3">PAIEMENT TOTALEMENT SÉCURISÉ</h3>
      <h4>La transaction est cryptée (SSL). Les informations bancaires que vous donnez, cryptées sur votre propre ordinateur, ne circuleront jamais en clair sur Internet et votre numéro de carte ne sera jamais connu ni conservé par Rue du Commerce.</h4>
      <h3 id="titre3">QUAND LE MONTANT DE LA COMMANDE SERA-T-IL DÉBITÉ ?</h3>
      <h4>Si votre commande ne contient que des produits vendus et expédiés par Rue du Commerce, votre carte bancaire sera débitée au moment où notre logisticien prépare votre colis pour son expédition.
Si votre commande ne contient que des produits vendus et expédiés par un ou plusieurs partenaires marchands, votre commande sera débitée lors de la transaction.
Si votre commande contient des produits vendus et expédiés par Rue du Commerce et des produits vendus et expédiés par des marchands partenaires, le paiement de vos produits vendus et expédiés par nos partenaires sera débité immédiatement et le paiement de vos produits vendus et expédiés par Rue du Commerce sera débité à l’expédition de votre colis.</h4>
<h3 id="titre2">PAIEMENT PAR PAYPAL </h3>
<img src="paypal.png" class="images_centre"/>
<h4>Payez avec PayPal – c'est sécurisé, simple et gratuit !
PayPal est un service qui vous permet de payer en ligne, d'envoyer et de recevoir de l'argent sans partager vos informations bancaires.</h4>
<table>
  <td width=150>
    <img src="bandet.png" class="images_centre"/>
  </td>
  <td>

 <h3 id="titre4">C'est sécurisé</h3>
 <h4>En tant qu'établissement bancaire au sein de l'Union Européenne, PayPal vous offre plus de 10 ans d'expérience dans les paiements sécurisés en ligne. PayPal crypte et sécurise vos informations bancaires et ne les communique jamais au destinataire de vos paiements.</h4>
 <h3 id="titre4">C'est simple et rapide</h3>
 <h4>Plus besoin de saisir les 16 chiffres de votre carte bancaire à chaque fois que vous faites un achat en ligne. Utilisez simplement vos identifiants PayPal : email et mot de passe. Vos transactions sont instantanées.</h4>
 <h3 id="titre4">C'est gratuit</h3>
 <h4>Payer en ligne avec PayPal ne vous coûte pas plus cher qu'avec votre carte bancaire. Si vous faites des achats en euros dans la Zone Euro de l'Union Européenne, c'est gratuit.</h4>
</td>
</table>
</div>

 <?php
 include("footer.php");
 ?>
  </div>
  </body>
</html>