<?php

// connexion à la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8', 'root', 'root');

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