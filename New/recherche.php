<!DOCTYPE html">
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="rechee.css" />


</style>
  </head>
  
  <body>
  <div id="conteneur">    
    <header>
    <h1 id="header"><a href="accueil.php" title="Bio&Bon">Bio&Bon</a></h1>


    <p id="pseudo">
        <label1>Email</label1> : <input type="text" name="email" size="25"/>
    </p>
    <p id="mdp">

        <label1>Mot de passe</label1> : <input type="password" name="mdp" size="25" />
    </p>
    <p id="bouton">
      <input type="submit" value="Valider" />
    </p>

    <a id="inscription" href="#">Inscription</a>
    <div id="forum"> <img src="Livre.png" alt="logo"  />
  		<h2 id="t" class="Style5">Forum</h2>
		</div>

    <div id="searchbar">        
            <form action="" class="formulaire">
               <input class="champ" name="search" type="text" placeholder="Ex : Fraise/pomme de terre" size="70" maxlength="50" required/> 
<?php
      if(isset($_POST['submit']))
    {
          $search = mysql_real_escape_string(htmlspecialchars(trim($_POST['search'])));
          if(empty($search))   // Vérifier si le champs search n'est pas vide
          {
             echo" <span class =' erreur'> Veuillez remplir ce champs s'il vous plait </span class>";

          }else{
                  results ($research);
          }
      }
    
?>
               <input class="bouton" type="submit" value="Rechercher" />
            </form>
    </div>

    <a id="ra" href="#">Recherche avancée</a>
    
</header>
    <div id="menu">
  <ul id="onglets">
    <li><a href="Page_d'accueil.php"> Accueil </a></li>
    <li><a href="Page achat.html"> Achat </a></li>
    <li><a href="Page echange.html"> Echange </a></li>
    <li><a href="Pagebio.html"> Bio </a></li>
    <li><a href="Pagepromo.html"> Promo </a></li>
    <li class="active"><a href="function.php"> recherche avancée </a></li>
  </ul>
</div>

<div id="panier"> <img src="panier.jpg" alt="logo"  />

      <h2 id="t" class="Style5">Panier</h2>

    </div>  
  

 <div id="corps" style="overflow:none; height: 600px; width: 1000px; border: 1px solid orange">
  



<?php   // mettre une requete get pour lorsque l'on envoie le mot , recupere le mot dans l'adresse url

include ('connect.php'); // lien avec l'autre page


if(isset($_POST['product_name']))      $article=$_POST['product_name'];
else  $product_name=""; 

if(isset($_POST['price_suggered_euros_kg']))      $quantity=$_POST['price_suggered_euros_kg'];
else  $price_suggered_euros_kg="";

// Rajouter la meme chose pour description si le test est bon 
if(empty($product_data)){
      echo 'chhh';
}
else{


       $bdd = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try {
               
   $req = $bdd->prepare('INSERT INTO product_data VALUES (NULL,:product_name,:price_suggered_euros_kg,NULL,"'.$_POST["famille"].'")');
    if (!$req) {
        print_r($bdd->errorInfo());
    }
      $req->execute(array( 
      'product_name'=>$product_name,
      'price_suggered_euros_kg'=>$price_suggered_euros_kg,
      // Rajouter la meme chose pour produit si le test est bon
      ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
      echo 'Les produits trouvés sont:';
    ?>
<?php

   $req->closeCursor();   
    } 




/*
function results ($search)

{
	
	$where ="";

	$search = preg_split ('/[\s\-]/', $search); // Pour avoir des espaces au niveau des mots

	$count_keywords = count ($search);

	foreach ($search as $key=>$searches)

{  $where .= "articles like '%$search%'";

if ($key != ($count_keywords-1))

{
	$where .="AND"; // Rajouter les articles, tant qu'il y en aura
}

}
}
*/
/*$query = mysql_query(" SELECT * FROM articles where $where ");
$rows = mysql_num_rows($query); // on utilise la fonction mysql_num_rows pour compter les résultats pour vérifier par après

if ($rows)
{
 
while($article = mysql_fetch_assoc($squery))  // Les différents articles 

{
	echo " <strong>".$article['article']." </strong><br/><u>Description:</u><br>".$article['desc']."<br/>Prix: ".$article['prix']."e <br/><br/><br/>";
}

}else{
	echo "Nous n'avons pas trouvé de résultats";

}

}*/

?>



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