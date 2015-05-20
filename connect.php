<?php
try{
//mysqli_connect("localhost", "root", "") or die (mysql_error()); 
include("bdd_connect.php");

$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
        echo $e->getMessage();
    }
         
?>