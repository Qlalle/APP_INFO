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
    <li><a href="Page_vente.php">Vente/Echange</a></li>
  </ul>
</div>
    <link rel="stylesheet" href="Reglement.css" />
  

     <div id="contenu" style="overflow:auto; height: 645px; width:100%; border: 1px solid orange">
    <h1 id="titre">Règlement</h1>
    </br>
    <h2><span>Fruits et Légumes</span></h2>
    </br>
    <p>
      Article 1 : Touts fruits ou légumes vendu sur ce site doivent avoir été récolté depuis moins de 10 jours </br></br>
      Articlé 2 : Touts produits mis en ligne mais invendu au bout de 5 jours sera automatiquement mis dans la rubrique promotion. 
      Cette promotion sera de -30% au bout de 5jours puis -50% au bout d'une semaine.</br></br>
      Article 3 : Touts produits non vendu dans la semaine de mis en ligne sera automatiquement supprimé.
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