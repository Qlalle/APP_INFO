<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 08/06/2015
 * Time: 11:07
 */
session_start();
include("bdd_connect.php");

$email=$_SESSION['user_email'];
$madresse=$_POST['madresse'];
echo $madresse, $email;

$bdd->exec("UPDATE users SET user_post_office_box = '".$madresse."' WHERE user_email = '".$email."'");

$_SESSION['user_post_office_box'] = $madresse;

header('Location: /APP_INFO/pageprofil.php');