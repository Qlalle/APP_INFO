 <?php

if(isset($_POST['sale_or_change'])){      $sale_or_change=$_POST['sale_or_change'];}
else      $sale_or_change="";

if(isset($_POST['quality_type'])){     $quality_type=$_POST['quality_type'];}
else      $quality_type="";

if(isset($_POST['quantity'])){      $quantity=$_POST['quantity'];}
else      $quantity="";

if(isset($_POST['product_price'])){     $product_price=$_POST['product_price'];}
else      $product_price="";

if(isset($_POST['product_comment_user'])){     $product_comment_user=$_POST['product_comment_user'];}
else      htmlentities($product_comment_user="");

if(empty($sale_or_change) && empty($quality_type) && empty($quantity) && empty($product_price) && ($EnvoyerDonnee <> "")) 
    {
    echo '<font color="red">Attention, seul le champs <b>Commentaire</b> peut rester vide !</font>';
    }


else     
    {
       include("bdd_connect.php");
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try {
 
    $req = $bdd->prepare('INSERT INTO product_on_line VALUES (NULL,:sale_or_change,:quality_type,:quantity, :product_price,:product_comment_user, NULL, NULL, "'.$_POST["produit"].'", "'.$_POST["departement"].'")');
    if (!$req) {
        print_r($bdd->errorInfo());
    }
    $req->execute(array(
    	'sale_or_change'=>$sale_or_change,
    	'quality_type'=>$quality_type,
    	'quantity'=>$quantity,
    	'product_price'=>$product_price,
    	'product_comment_user'=>$product_comment_user
    	));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    

    
    echo 'Vos infos on été ajoutées.';
    ?>
    <a href="Page_d'accueil.php">retour page d'accueil</a> 
    <?php

   $req->closeCursor();   
    } 
?>
  