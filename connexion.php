<?php

// connexion à la base de donnée
include("bdd_connect.php");

$email = $_POST['email'];
$mdp = $_POST['mdp'];
// Vérification des identifiants
$req = $bdd->prepare("SELECT user_password FROM users WHERE user_email = ?");
$req->execute(array($email));
    $password = $req->fetch();

$req1 =$bdd->prepare("SELECT *  FROM users WHERE user_email= ?");

$req1 =$bdd->prepare("SELECT * FROM users WHERE user_email= ?");

$req1->execute(array($email));
    $tab = $req1->fetch();
$firstname = $tab['user_firstname'];
$name = $tab['user_name'];
$post_office_box = $tab['user_post_office_box'];
$city = $tab['user_city'];



if (password_verify($mdp, $password['user_password']))
{
    session_start();
    $_SESSION['user_email']= $email;
    $_SESSION['user_firstname']= $firstname;
    $_SESSION['user_name']= $name;
    $_SESSION['user_post_office_box']= $post_office_box;
    $_SESSION['user_city']= $city;

    header('Location: /APP_INFO/Page_accueil.php');
    echo 'vous etes bien connecte.';
}
else
{

    echo 'Mot de passe ou email incorrect!';
}

 

?>