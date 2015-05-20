<DOCTYPE html>

<?php
include("haut_de_page.php");
?>
<div id="menu">
  <ul id="onglets">
    <li><a href="Page_d'accueil.php"> Accueil </a></li>
    <li><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li  class="active"><a href="Pagepromo.php"> Promo </a></li>
    <li><a href="Page_vente.php"> Vente </a></li>
  </ul>
</div>
    <link rel="stylesheet" href="Pagepromo.css" />
  
    <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th><span id="prix">Prix</span></th>
           <th><span id="photo">Photo</span></th>
           <th><span>Quantité</span></th>
           <th><span id="region">Région</span></th>
           <th><span id="description">Description</span></th>
           <th> </th>
       </tr>
   </thead>
 </table>
<div style="overflow:auto; height: 600px; width: 100%; border: 1px solid orange">
<table style="width: 100%;">
   <tbody>
   <tr>
        <td> <p id="ancienPrix">4,20€/kg</p> <p id="nouveauPrix">3,10€/kg</p></td>
           <td><img src="images3.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Banane bio</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>
       

<tr id="mangue">
          <td> <p id="ancienPrix">3,00€/kg</p> <p id="nouveauPrix">2,10€/kg</p></td>
           <td><img src="imagesmangue.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Nord-Pas-de-Calais</td>
       <td>Mangue bio</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
   </tr>

   <tr id="papaye">
          <td> <p id="ancienPrix">2,00€/kg</p> <p id="nouveauPrix">1,40€/kg</p></td>
           <td><img src="papaye.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Martinique</td>
       <td>Papaye</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
   </tr>
       
<tr id="pitaya">
          <td> <p id="ancienPrix">2,00€/kg</p> <p id="nouveauPrix">1,10€/kg</p></td>
           <td><img src="pitaya.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Réunion</td>
       <td>Pitaya</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
   </tr>

<tr id="melon">
          <td> <p id="ancienPrix">2,00€/kg</p> <p id="nouveauPrix">1,10€/kg</p></td>
           <td><img src="melonbio.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>France</td>
       <td>Melon</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
   </tr>

<tr id="patate">
          <td> <p id="ancienPrix">2,00€/kg</p> <p id="nouveauPrix">1,10€/kg</p></td>
           <td><img src="patate.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>France</td>
       <td>Pomme de terre</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
   </tr>   
   </tbody>
   </table>
   </div>
         <?php
         include("footer.php");
         ?>
    </div>
</body>
</html>