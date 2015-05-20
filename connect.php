<?php
try{
//mysqli_connect("localhost", "root", "") or die (mysql_error()); 
$bdd = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8', 'root','root');
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
        echo $e->getMessage();
    }
         
?>