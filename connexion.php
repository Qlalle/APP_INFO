<?php

// connexion à la base de donnée
include("bdd_connect.php");

$email = $_POST['email'];
$mdp = $_POST['mdp'];
// Vérification des identifiants
$req = $bdd->prepare("SELECT user_password FROM users WHERE user_email = ?");
$req->execute(array($email));
    $password = $req->fetch();
$req1 =$bdd->prepare("SELECT user_firstname FROM users WHERE user_email= ?");
$req1->execute(array($email));
    $tab = $req1->fetch();
$firstname = $tab['user_firstname'];


if (password_verify($mdp, $password['user_password']))
{
    session_start();
    $_SESSION['user_email']= $email;
    $_SESSION['user_firstname']= $firstname;
    header('Location: /APP_INFO/Page_accueil.php');
    echo 'vous etes bien connecte.';
}
else
{

    echo 'Mot de passe incorrect!';
}

 

?>