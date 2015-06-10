<meta charset="utf-8" />
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
		$message='Vous allez être deconnecté';
    echo '<script type="text/javascript">window.alert("'.$message.'"); window.location.href="page_accueil.php";</script>';
?>