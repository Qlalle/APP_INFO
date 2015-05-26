<?php session_start();?>
<?php
session_start();
include("bdd_connect.php");

$_SESSION['email']=$email;

if($email==NULL){
?>

    <a  href="Page_d'accueil.php">Retour page d'accueil</a>

<?php
}
else{
    $reponse = $bdd->query('
      SELECT basket_sale_id FROM basket_sale
      INNER JOIN users ON id_user=user_id
      WHERE user_email= " .$email. "
      ORDER BY product_on_line_id DESC');
    if($reponse==NULL){
        $req = $bdd->prepare('
      INSERT INTO product_on_line
      VALUES ( NULL,:sale_or_change,:quality_type,:quantity, :product_price,:product_comment_user, NULL, NULL, "'.$_POST["produit"].'", "'.$_POST["departement"].'")');
    }
    else{

    }
}



if(empty($reponse)){
    //création d'un panier
}

else{
    //rien
}
//if(isset($_POST['ajout_prod'])){      $ajout_prod=$_POST['ajout_prod'];}
//else      {$ajout_prod="";};
if(){

}

