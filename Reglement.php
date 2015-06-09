<?php session_start();?>
<DOCTYPE html>

<?php
include("haut_de_page.php");
?>
<div id="menu">
  <ul id="onglets">
    <li><a href="Page_accueil.php"> Accueil </a></li>
    <li><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li><a href="Pagepromo.php"> Promo </a></li>
    <li><a href="Page_vente.php">Ajout produit</a></li>
  </ul>
</div>
    <link rel="stylesheet" href="Reglement.css" />
  

     <div id="contenu" style="overflow:auto; height: 645px; width:100%; border: 1px solid orange">
    <h1 id="titre">Règlement</h1>
    </br>
    <h2><span>Fruits et Légumes</span></h2>
    </br>
    <p>
      Article 1 : Tout fruits ou légumes vendu sur ce site doivent avoir été récolté depuis moins de 10 jours.</br></br>
      Article 2 : Tout produits mis en ligne, mais invendu au bout de 5 jours, sera automatiquement mis dans la rubrique promotion. 
      Cette promotion sera de <b>-50%</b> au bout de 5 jours.</br></br>
      Article 3 : Après 10 jours, les produits invendus seront automatiquement supprimé du site.</br></br>
    </p>

    <h2><span>Bio</span></h2>
    </br>
    <p>
      Article 1 : Seul les produits cultivé de façon biologique, à savoir sans OGM et sans pesticide pourra être ajouter en tant que produits bio. </br></br>
      Articlé 2 : Toutes personnes ne respectant pas l'article précédent sera banis du site. 
    </p>
    
    </div>

 <?php
 include("footer.php");
 ?>
  
  </body>
</html>