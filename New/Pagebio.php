<?php
include ("PDB1.php");
?>


    <link rel="stylesheet" href="Pagebio.css" />


    
    
<table style="overflow:auto; height: 50px; width: 1000px; border: 1px solid orange">
   <thead>
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

   <div id="corps" style="overflow:auto; height: 600px; width: 100Opx; border: 1px solid orange">
   <table style="width: 100%;">
    <tbody>
     <tr>
        <td>4,20€/kg</td>
           <td><img src="images3.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Ile de France</td>
       <td>Banane bio</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>

    <tr id="mangue">
          <td>3,00€/kg</td>
           <td><img src="mangue.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Nord-Pas-de-Calais</td>
       <td>Mangue bio</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
   </tr>
   <tr>
           <td>3,00€/kg</td>
           <td><img src="kiwibio.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Corse</td>
       <td>Kiwi bio</td>
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
           <td>2,20€/kg</td>
           <td><img src="melonbio.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Poitou-Charentes</td>
       <td>Melon</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>

     <tr>
           <td>1,50€/kg</td>
           <td><img src="patate.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Bourgogne</td>
       <td>Pommes de terre</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>

       <tr>
           <td>1€/kg</td>
           <td><img src="cerisebio.png"height="90" width="90"/></td>
           <td><input type="number",step="1" value="0" min="0" /></td>
       <td>Provence-Alpes-Côte d'Azur</td>
       <td>Cerise</td>
       <td><input type="submit" value="Ajouter au panier" /></td>
       <td><input type="submit" value="En savoir plus" /></td>
       </tr>     
   </tbody>
   </table>

   </div>
   
   <ul id="Basdepage">
        <li><a href="Page_contact.php">Nous contacter</a></li>
        <li><a href="#">Plan du site</a></li>
        <li><a href="Réglement.php">Réglement</a></li>
        <li><a href="page_tarif.php">Tarif</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
      </ul>
    </div>
</body>
</html>