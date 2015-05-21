<DOCTYPE html>

<?php

session_start();
    include("haut_de_page.php");
    include("bdd_connect.php");
?>
<div id="menu">
  <ul id="onglets">
    <li><a href="Page_d'accueil.php"> Accueil </a></li>
    <li><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li><a href="Pagepromo.php"> Promo </a></li>
    <li><a href="Page_vente.php"> Vente </a></li>
  </ul>
</div>
    <link rel="stylesheet" href="PageInscription.css" />
  

 <div id="corp" style="overflow:auto; height: 600px; width: 100%; border: 1px solid orange">
<table style="width: 100%;">

<h3>REMPLISSEZ CE FORMULAIRE POUR ACCÉDER AUX VENTES</h3>
<!-- Nom de la base de donnee = bioetbon/users-->
 <tbody >
<form method="post" >

<label>Civilité*              </label> <select name="civilite">
    <option value=""></option>
    <option value="M">M</option>
    <option value="Mme">Mme</option>
</select><br/><br/>
<label>Prénom*                </label> <input type="text" name="first_name"/><br/>
<label>Nom*                    </label><input type="text" name="last_name"/><br/>
<label>Date de Naissance*      </label><input type="date" max="2100-01-01" min="1900-01-01" name="birthday"><br/>
<label>Adresse*                 </label>  <input type="text" name="user_post_office_box"/><br/>
<label>Profession*              </label><input type="text" name="job"/><br/>
<label>Code postal*           </label> <input type="text" name="country"/><br/>
<label>Ville*                  </label><input type="text" name="city"/><br/>
<label>E-mail*                 </label><input type="text" name="email"/><br/>
<label>Confirmez e-mail*       </label><input type="text" name="email2"/><br/>
<label>Mot de passe*           </label><input type="password" name="password"/><br/>
<label>Confirmer mot de passe* </label><input type="password" name="passe2"/><br/>
<input type="submit" name="valider" value="M'inscrire"/>
</form>
 </tbody >


<?php
  
  if(isset($_POST['valider']))
    {
  
        

     // D'abord, je me connecte à la base de données.
     //$bdd = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8', 'root', 'root');
    
      
      // Je recupere les infos, plus securité pour le code.
        htmlentities($password = $_POST['password']);
        htmlentities($passe2 = $_POST['passe2']);
        htmlentities($email = $_POST['email']);
        htmlentities($email2 = $_POST['email2']);
        htmlentities($country = $_POST['country']);
        htmlentities($civilite = $_POST['civilite']);
        htmlentities($first_name = $_POST['first_name']);
        htmlentities($last_name = $_POST['last_name']);
        htmlentities($birthday = $_POST['birthday']);
        htmlentities($job = $_POST['job']);
        htmlentities($user_post_office_box = $_POST['user_post_office_box']);
        htmlentities($city = $_POST['city']);
      
        // empecher les codes php dans la base
      // Je verifie que TOUT les champs sont remplis.
      if(empty($password)||empty($email)||empty($civilite) || empty($first_name) || empty($last_name) || empty($birthday ) || empty($job) || empty($user_post_office_box) || empty($city) || empty($email) )
      {
        echo'Vous devez remplir toutes les coordonnées';
      }
      else
      {

              if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  if (($password == $passe2) && ($email == $email2)) {


                      $passwordh = password_hash($password, PASSWORD_DEFAULT);
                      $reponse = $bdd->query("INSERT INTO users VALUES('', '$last_name','$first_name', '$user_post_office_box','$city', '$country', '$birthday','', '$email','$passwordh','','','')");
                      //affiche un mot gentil, dans le futur on doit changer pour que ceci apparaisse sur une autre.
                      echo "Bonjour $first_name votre compte est bien enregistré";
                  } else {
                      echo '<p> Les deux mots de passe ou les deux e-mails que vous avez rentrés ne correspondent pas </p>';
                  }
              } else {
                  echo 'Votre email n\'est pas valide';
              }
          
      }
    }
    
?>
</table>
</div>








 <ul id="Basdepage">
        <li><a href="Page_contact.php">Nous contacter</a></li>
        <li><a href="#">Plan du site</a></li>
        <li><a href="Réglement.php">Réglement</a></li>
        <li><a href="page_tarif.php">Tarif</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
      </ul>

  </div>
  </body>
</html>