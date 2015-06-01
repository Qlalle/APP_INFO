<?php session_start();?>

<DOCTYPE html>

  <?php
    include("haut_de_page.php");
    include("bdd_connect.php");
  ?>
    <link rel="stylesheet" href="Inscription.css" />
  
  <div id="menu">
  <ul id="onglets">
    <li><a href="Page_accueil.php"> Accueil </a></li>
    <li><a href="Page_achat.php"> Achat </a></li>
    <li><a href="Page_echange.php"> Echange </a></li>
    <li><a href="Pagebio.php"> Bio </a></li>
    <li><a href="Pagepromo.php"> Promo </a></li>
    <li><a href="Page_vente.php"> Vente/Echange </a></li>
  </ul>
</div>

 <div id="corp" style="overflow:auto; height: 665px; width: 1178px; border: 1px solid orange">
<table style="width: 100%;">

<h3>REMPLISSEZ CE FORMULAIRE POUR ACCÉDER AUX VENTES</h3>
<!-- Nom de la base de donnee = bioetbon/users-->
 <tbody >
<form method="post" >

<label>Civilité*             </label> <select name="civilite">
    <option value=""></option>
    <option value="M">M</option>
    <option value="Mme">Mme</option>
</select><br/><br/>
<label>Prénom*                </label> <input type="text" name="first_name" id="first_name" onkeyup="verifpre()"/><br/><br/>
<label>Nom*                   </label><input type="text" name="last_name" id="last_name" onkeyup="verifnom()"/><br/><br/>
<label>Date de Naissance*     </label><input type="date" name= "birthday" max="2016-01-01" min="1900-01-01">(jj/mm/aaaa)<br/><br/>
<label>Adresse*               </label>  <input type="text" name="user_post_office_box" id="user_post_office_box" onkeyup="verifadresse()"/><br/><br/>
<label>Profession*            </label><input type="text" name="job" id="job" onkeyup="verifprof()"/><br/><br/>
<label>Code postale*          </label> <input type="text" name="country" id="country" onkeyup="verifpost()"/><br/><br/>
<label>Ville*                 </label><input type="text" name="city" id="city" onkeyup="verifville()"/><br/><br/>
<label>E-mail*                </label><input type="text" name="email" id="email" onkeyup="verifmail()"/><br/><br/>
<label>Confirmez e-mail*      </label><input type="text" name="email2" id="email2" onkeyup="verifmail2()" /><br/><br/>
<label>Mot de passe*          </label><input type="password" name="password"/><br/><br/>
<label>Confirmer mot de passe*</label><input type="password" name="passe2"/><br/><br/>
<input type="checkbox" name="Regle"><a href="Reglement.php"> Reglement à valider </a></br></br>
<input type="submit" name="valider" value="M'inscrire"/>
</form>
 </tbody >


<?php
  
  if(isset($_POST['valider']))
    {

    
      
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
        htmlentities($Regle=$_POST['Regle']);
      
        // empecher les codes php dans la base
      // Je verifie que TOUT les champs sont remplis.
      if(empty($password)||empty($email)|| empty($Regle)||empty($civilite) || empty($first_name) || empty($last_name) || empty($birthday ) || empty($job) || empty($user_post_office_box) || empty($city) || empty($email) )
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
<?php 
include("footer.php");
?>

  </div>
   <script type="text/javascript" src="../APP_INFO/verif.js"></script>
  </body>
</html>