<?php
session_start();
?>
<DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8" />

<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 08/06/2015
 * Time: 11:01
 */

include("bdd_connect.php");

$message='Votre email a bien été modifié';

    echo '<script type="text/javascript">window.alert("'.$message.'"); window.location.href="pageprofil.php";</script>';


$email=$_SESSION['user_email'];
$memail=$_POST['memail'];
echo $memail, $email;

$bdd->exec("UPDATE users SET user_email = '".$memail."' WHERE user_email = '".$email."'");

$_SESSION['user_email'] = $memail;

