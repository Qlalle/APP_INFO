<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 08/06/2015
 * Time: 09:19
 */
session_start();
include("bdd_connect.php");

$email=$_SESSION['user_email'];
$memail=$_POST['memail'];
echo $memail, $email;

$bdd->exec("UPDATE users SET user_email = '".$memail."' WHERE user_email = '".$email."'");

$_SESSION['user_email'] = $memail;

header('Location: /APP_INFO/pageprofil.php');