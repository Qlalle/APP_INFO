<?php

/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 26/05/2015
 * Time: 16:15
 */

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');
?>