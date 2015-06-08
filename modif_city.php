<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 08/06/2015
 * Time: 11:01
 */
session_start();
include("bdd_connect.php");

$email=$_SESSION['user_email'];
$mcity=$_POST['mcity'];
echo $mcity, $email;

$bdd->exec("UPDATE users SET user_city = '".$mcity."' WHERE user_email = '".$email."'");

$_SESSION['user_city'] = $mcity;

header('Location: /APP_INFO/pageprofil.php');