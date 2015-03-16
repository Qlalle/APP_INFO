<!DOCTYPE html">
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Bio & Bon</title>
    <link rel="stylesheet" href="PageInscription.css" />
  </head>
  
  <body>
  <div id="conteneur">    
    <header>
    <h1 id="header"><a href="#" title="Bio&Bon">Bio&Bon</a></h1>

    <p id="pseudo">
        <label>Votre pseudo</label> : <input type="text" name="pseudo" size="25"/>
    </p>
    <p id="mdp">

        <label>Mot de passe</label> : <input type="password" name="mot de passe" size="25" />
    </p>
    <p id="bouton">
      <input type="submit" value="Valider" />
    </p>
    <a id="inscription" href="#">Inscription</a>
 
    <div id="forum"> <img src="Livre.png" alt="logo"  />
  		<h2 id="t" class="Style5">Forum</h2>
		</div>

    <div id="searchbar">        
            <form action="" class="formulaire">
               <input class="champ" type="text" placeholder="Ex : Fraise/pomme de terre" size="70" maxlength="50" />
               <input class="bouton" type="button" value="Rechercher" />
            </form>
    </div>

    <a id="ra" href="#">Recherche avancée</a>
    
</header>

  <div id="menu">
  <ul id="onglets">
    <li  class="active"><a href="Page d'accueil.html"> Accueil </a></li>
    <li><a href="Page achat.html"> Achat </a></li>
    <li><a href="Page echange.html"> Echange </a></li>
    <li><a href="Pagebio.html"> Bio </a></li>
    <li><a href="#.html"> Promo </a></li>
    <li><a href="Page vente.html"> Vente </a></li>
  </ul>
</div>

 <div id="corp" style="overflow:auto; height: 600px; width: 1000px; border: 1px solid orange">
<table style="width: 100%;">

<h3>REMPLISSEZ CE FORMULAIRE POUR ACCÉDER AUX VENTES</h3>
<!-- Nom de la base de donnee = bioetbon/users-->
 <tbody >
<form method="post" >

<label>Adresse*                   <input type="text" name="country"/></label><br/>
<label>Civilité*              </br> <select name="civilite">
    <option value=""></option>
    <option value="M">M</option>
    <option value="Mme">Mme</option>
</select></label><br/>
<label>Prénom*                 <input type="text" name="first_name"/></label><br/>
<label>Nom*                    <input type="text" name="last_name"/></label><br/>
<label>Date de Naissance*      <input type="date" max="2016-01-01" min="2011-08-13" name="birthday"></label><br/>
<label>Profession*              <input type="text" name="job"/></label><br/>
<label>Code postale*            <input type="text" name="user_post_office_box"/></label><br/>
<label>Ville*                  <input type="text" name="city"/></label><br/>
<label>E-mail*                 <input type="text" name="email"/></label><br/>
<label>Confirmez e-mail*       <input type="text" name="email2"/></label><br/>
<label>Mot de passe*           <input type="password" name="password"/></label><br/>
<label>Confirmer mot de passe* <input type="password" name="passe2"/></label><br/>
<input type="submit" name="valider" value="M'inscrire"/>
</form>
 </tbody >

</table>
</div>
<?php
  
  if(isset($_POST['valider']))
    {
  
        echo 'jai appuié';

     // D'abord, je me connecte à la base de données.
     $bdd = new PDO('mysql:host=localhost;dbname=bioetbon;charset=utf8', 'root', '');
    
      
      // Je recupere les infos
      $password = $_POST['password'];
      $passe2 = $_POST['passe2'];
      $email = $_POST['email'];
      $email2 = $_POST['email2'];$country = $_POST['country'];
      $civilite = $_POST['civilite'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $birthday = $_POST['birthday'];
      $job = $_POST['job'];
      $user_post_office_box = $_POST['user_post_office_box'];
      $city = $_POST['city'];
      

      // Je verifie que TOUT les champs sont remplis.
      if(($password == 0)||($email == 0)||($civilite == 0) || ($first_name == 0) || ($last_name == 0) || ($birthday == 0) || ($job == 0) || ($user_post_office_box == 0) || ($city == 0) || ($email == 0) )
      {
        echo'Vous devez remplir toutes les coordonnées';
      }
      else
      {
       if(($password == $passe2) && ($email == $email2) )
          {

       

         $reponse = $bdd->query("INSERT INTO users VALUES('', '$country','$civilite', '$first_name','$last_name','$birthday', '$job', '$user_post_office_box', '$city', '$email','$password','','')");
         }
 
          else
          {
          echo 'Les deux mots de passe ou les deux e-mails que vous avez rentrés ne correspondent pas';
          }
      }
    }
    
?>







 <ul id="Basdepage">
        <li><a href="Page contact.html">Nous contacter</a></li>
        <li><a href="#">Plan du site</a></li>
        <li><a href="Réglement.html">Réglement</a></li>
        <li><a href="page tarif.html">Tarif</a></li>
        <li><a href="FAQ.html">FAQ</a></li>
      </ul>

  </div>
  </body>
</html>