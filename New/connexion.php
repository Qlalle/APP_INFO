<?php

// connexion à la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8', 'root', '');

$email = $_POST['email'];
$mdp = $_POST['mdp'];
// Vérification des identifiants
$req = $bdd->prepare('SELECT password FROM users WHERE email = ? ');
$req->execute(array($email));
    $password = $req->fetch();

if (password_verify($mdp, $password['password']))
{
  
    echo 'Vous etes connecté !';
}
else
{

    echo 'Mot de passe incorrect!';
}
?>