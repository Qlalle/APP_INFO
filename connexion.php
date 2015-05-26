<?php

// connexion à la base de donnée
include("bdd_connect.php");

$email = $_POST['email'];
$mdp = $_POST['mdp'];
// Vérification des identifiants
$req = $bdd->prepare("SELECT user_password FROM users WHERE user_email = ?");
$req->execute(array($email));
    $password = $req->fetch();



if (password_verify($mdp, $password['user_password']))
{
    session_start();
    $_SESSION['user_email']= $email;
    header('Location: /APP_INFO/Page_d\'accueil.php');
    echo 'vous etes bien connecte.';
}
else
{

    echo 'Mot de passe incorrect!';
}

 

?>