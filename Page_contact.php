<?php session_start();?>
<DOCTYPE html>
<?php
include("haut_de_page.php");
?>
    <link rel="stylesheet" href="Page_contact.css" />
  

<div id="corps" style="overflow:none; height: 745px; width: 1178px; border: 1px solid orange">
<h3>Vous souhaitez contacter le service Livraison, écrivez à <span>bioetbon@gmail.com</span></h3>
<h3>Pour toute autre demande, merci de remplir le formulaire ci-dessous :</h3>
<br/>
<br/>
    <p>
        <label>Prenom :</label><input type="text" name="Prenom" size="25"/>
    </p>
    <p>
        <label>Nom :</label><input type="text" name="Nom" size="25" />
    </p>
    <p>
        <label>Email :</label><input type="text" name="Email" size="25" />
    </p>
    <p>
        <label>Telephone :</label><input type="text" name="Telephone" size="25" />
    </p>
    <br/>
    <br/>
    <p id="objet">

        <label>Objet :</label><br/><input type="text" name="Objet" size="53" />

    </p>
    <p id="Commentaire">

        <label>Commentaire :</label><br/>
        <textarea name="Commentaire" id="Commentaire" rows="10" cols="50"></textarea>
    </p>
    <p id="bouton1">
      <input type="submit" value="Envoyer" style="width:130px"/>
    </p>

     <p id="bouton2">
      <input type="submit" value="Effacer" style="width:130px"/>
    </p>

</div>

     <?php
     include("footer.php");
     ?>
  </div>
  </body>
</html>