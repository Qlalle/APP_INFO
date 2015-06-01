<?php
session_start();
include("bdd_connect.php");

$email=$_SESSION['user_email'];


//$_SESSION['email']=$email;
$id_productq=$_POST['id_prod'];
echo "id du produit en ligne : ".$id_productq; echo "   ";
echo "quantite choisie : ".$_POST['quantity']; echo "   ";
echo "le type de vente : ".$_POST['qualityType'];
echo "vous etes : ".$email;echo "   ";

?>
<form method="POST" action="Page_accueil.php">
    <input type="hidden" name="idid_prod" value=" <?php echo $id_productq; ?> " /> </input>
</form>
<?php
//if($email==NULL){
?>

    <a  href="Page_accueil.php">Retour page d'accueil</a>

<?php
$reponse1 = $bdd->query('SELECT user_id FROM users WHERE user_email="'.$email.'"');
$reponse1 = $reponse1->fetch();

//vérifification si l'utilisateur a un panier achat

$reponse0 = $bdd->query('SELECT basket_sale_id FROM basket_sale INNER JOIN users ON user_id = id_user WHERE user_email="'.$email.'"  ');
$reponse0 = $reponse0->fetch();

//vérification si l'utilisateur a un panier échange

$reponse3 = $bdd->query('SELECT baket_change_id FROM basket_change INNER JOIN users ON user_id = id_user WHERE user_email="'.$email.'"  ');
$reponse3 = $reponse3->fetch();


//traitement sur le panier achat

if($reponse0['basket_sale_id']==NULL && $_POST['qualityType']!=0){
    echo "l'utilisateur n'a pas de panier achat, il va donc etre cree";

    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try {

        $req = $bdd->prepare('INSERT INTO basket_sale VALUES (NULL,NOW(),:validation,:id_user )');
        if (!$req) {
            print_r($bdd->errorInfo());
        }
        $req->execute(array(
            'validation'=>'0',
            'id_user'=>$reponse1["user_id"]

        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $reponse2 = $bdd->query('SELECT basket_sale_id FROM basket_sale INNER JOIN users ON user_id = id_user WHERE user_email="'.$email.'"  ');

    $reponse2 = $reponse2->fetch();

    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try {

        $req = $bdd->prepare('INSERT INTO product_in_basket_sale VALUES (NULL,:quantity,:id_basket_sale,:id_product_on_line)');
        if (!$req) {
            print_r($bdd->errorInfo());
        }
        $req->execute(array(
            'quantity'=>$_POST['quantity'],
            'id_basket_sale'=>$reponse2["basket_sale_id"],
            'id_product_on_line'=>$_POST['id_prod']
        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
elseif($reponse0['basket_sale_id']!=NULL && $_POST['qualityType']!=0){
    echo "l'utilisateur a un panier achat";
    $reponse2 = $bdd->query('SELECT basket_sale_id FROM basket_sale INNER JOIN users ON user_id = id_user WHERE user_email="'.$email.'"  ');

    $reponse2 = $reponse2->fetch();

    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try {

        $req = $bdd->prepare('INSERT INTO product_in_basket_sale VALUES (NULL,:quantity,:id_basket_sale,:id_product_on_line)');
        if (!$req) {
            print_r($bdd->errorInfo());
        }
        $req->execute(array(
            'quantity'=>$_POST['quantity'],
            'id_basket_sale'=>$reponse2["basket_sale_id"],
            'id_product_on_line'=>$_POST['id_prod']
        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

//traitement sur le panier échange

elseif($reponse3['baket_change_id']==NULL && $_POST['qualityType']==0){
    echo "l'utilisateur n'a pas de panier echange, il va donc etre cree";

    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try {

        $req = $bdd->prepare('INSERT INTO basket_change VALUES (NULL,NOW(),:validation,:id_user )');
        if (!$req) {
            print_r($bdd->errorInfo());
        }
        $req->execute(array(
            'validation'=>'0',
            'id_user'=>$reponse1["user_id"]

        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $reponse4 = $bdd->query('SELECT baket_change_id FROM basket_change INNER JOIN users ON user_id = id_user WHERE user_email="'.$email.'"  ');
    $reponse4 = $reponse4->fetch();

    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try {

        $req = $bdd->prepare('INSERT INTO product_in_basket_change VALUES (NULL,:quantity,:id_basket_change,:id_product_on_line)');
        if (!$req) {
            print_r($bdd->errorInfo());
        }
        $req->execute(array(
            'quantity'=>$_POST['quantity'],
            'id_basket_change'=>$reponse4["baket_change_id"],
            'id_product_on_line'=>$_POST['id_prod']
        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
else {
    echo "l'utilisateur a un panier échange";
    $reponse4 = $bdd->query('SELECT baket_change_id FROM basket_change INNER JOIN users ON user_id = id_user WHERE user_email="' . $email . '"  ');

    $reponse4 = $reponse4->fetch();

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {

        $req = $bdd->prepare('INSERT INTO product_in_basket_change VALUES (NULL,:quantity,:id_basket_change,:id_product_on_line)');
        if (!$req) {
            print_r($bdd->errorInfo());
        }
        $req->execute(array(
            'quantity' => $_POST['quantity'],
            'id_basket_change' => $reponse4["baket_change_id"],
            'id_product_on_line' => $_POST['id_prod']
        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>

