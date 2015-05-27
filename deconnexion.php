<?php

/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 26/05/2015
 * Time: 16:15
 */
session_start();
// Suppression des variables de session et de la session
$_SESSION = array();


session_destroy();
header('Location: /APP_INFO/Page_d\'accueil.php');
?>