<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 27/05/2015
 * Time: 11:34
 */
session_start();
if ((!isset($_SESSION['user_email'])) || ($_SESSION['user_email'] == '')){


    $message='Vous devez d\'abord vous connecter';

    echo '<script type="text/javascript">window.alert("'.$message.'"); window.location.href="Page_accueil.php";</script>';

}
else{
    header('Location: /APP_INFO/Page_vente.php');

}
?>