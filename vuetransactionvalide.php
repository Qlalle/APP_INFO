<?php
session_start();
include("bdd_connect.php");
$email=$_SESSION['user_email'];

$reponse0=$bdd->query('SELECT user_id FROM users WHERE user_email="'.$email.'"');
$reponse0=$reponse0->fetch();
?>
<DOCTYPE html>
  <?php
    include("haut_de_page.php");
  ?>
    <link rel="stylesheet" href="vue_transactionvalide.css" />

            <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th style="font-size:25px">Transaction valide</th>
        </tr>
    </thead>
     </table>

<?php
        
          $reponse=$bdd->query('SELECT * FROM historique_proposition WHERE id_user="'.$reponse0['user_id'].'"');
          while ($donnees = $reponse->fetch()) {
                  $reponse1=$bdd->query('SELECT user_email FROM users WHERE user_id="'.$donnees['id_acheteur'].'"');
                  $reponse1=$reponse1->fetch();
                  ?>
<table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           
           <th style="font-size:20px">Identité acheteur : <?php echo $reponse1['user_email'];?></th>
          </tr>
    </thead>
     </table>
     <table style="overflow:auto; height: 50px; width: 100%; border: 1px solid orange">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th id="pro">Produit</th>
           <th id="quant">Quantité</th>
           <th id="price">Sous-total</th>
        </tr>
    </thead>
     </table>


            <table style="overflow:auto; height: 50px; width: 100%">
   <tbody> <!-- En-tête du tableau -->
       <tr>
           <td id="prod"> <?php echo $donnees['nom_prod'];?></td>
           <td id="qt"> <?php echo $donnees['quantite_product'];?></td>
           <td id="prix"> <?php echo $donnees['sous_total'];?>€</td>
        </tr>

    </tbody>
     </table>
                 <?php
          }
          $reponse->closeCursor();

?>

  

