<?php

 //mysqli_connect("localhost", "root", "") or die (mysql_error()); 
$bdd = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8', 'root','');
   $reponse = $bdd->query('SELECT * FROM product_data INNER JOIN product_on_line ON id_product_date=product_date_id');

          while ($donnees = $reponse->fetch())
{
	print_r($donnees);
}
?>