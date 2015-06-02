<?php
/**
 * Created by PhpStorm.
 * User: Guillaume
 * Date: 02/06/2015
 * Time: 14:21
 */

if ((!isset($_SESSION['user_email'])) || ($_SESSION['user_email'] == '')){


    $message='Vous devez d\'abord vous connecter';

    echo '<script type="text/javascript">window.alert("'.$message.'"); window.location.href="Page_accueil.php";</script>';

}
else{


}
?>