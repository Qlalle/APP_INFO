<!DOCTYPE html">
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="Page d'accueil.css" />
  </head>
  
  <body>

    <?php include("menu.php"); ?>
    
</header>
    <div id="menu">
      <ul id="onglets">
        <li class="active"><a href="Page d'accueil.php"> Accueil </a></li>
        <li><a href="Page achat.php"> Achat </a></li>
        <li><a href="Page echange.php"> Echange </a></li>
        <li><a href="Pagebio.php"> Bio </a></li>
        <li><a href="#.php"> Promo </a></li>
        <li><a href="Page vente.php"> Vente </a></li>
      </ul>
    </div>


  
<table style="overflow:auto; height: 50px; width: 1000px; border: 1px solid orange">
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
 <div style="overflow:auto; height: 600px; width: 1000px; border: 1px solid orange">
<table style="width: 100%;">
   <tbody > <!-- Corps du tableau -->
       <tr>
           <td>1,40€/kg</td>
           <td><img src="images2.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Pomme</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>
       <tr>
           <td>4,20€/kg</td>
           <td><img src="images3.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Banane bio</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr> 
       <tr>
           <td>1,40€/kg</td>
           <td><img src="images2.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Pomme</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>
       <tr>
           <td>2,50€/kg</td>
           <td><img src="images4.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>fraise</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>     
       <tr>
           <td>2,20€/kg</td>
           <td><img src="images5.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Banane</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>
       <tr>
           <td>1,40€/kg</td>
           <td><img src="images2.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Pomme</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>     
       <tr>
           <td>2,20€/kg</td>
           <td><img src="images5.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Banane</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>
       <tr>
           <td>2,50€/kg</td>
           <td><img src="images4.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Fraise</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>     
       <tr>
           <td>1,40</td>
           <td><img src="images2.png"/></td>
           <td><input type="number",step="1" value="0" min="0"/></td>
       <td>Ile de France</td>
       <td>Pomme</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>
       <tr>
           <td>4,20€/kg</td>
           <td><img src="images3.png"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Banane bio</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>         
   </tbody>
</table>
     </div>

      <ul id="Basdepage">
        <li><a href="Page contact.php">Nous contacter</a></li>
        <li><a href="#">Plan du site</a></li>
        <li><a href="#">Réglement</a></li>
        <li><a href="page tarif.php">Tarif</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
      </ul>

  </div>
  </body>
</html>