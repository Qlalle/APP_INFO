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
  
    echo 'Vous etes connecte !';
}
else
{

    echo 'Mot de passe incorrect!';
}
?>