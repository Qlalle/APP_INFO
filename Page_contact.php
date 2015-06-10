<?php session_start();?>
<DOCTYPE html>
<?php
include("haut_de_page.php");
?>
    <link rel="stylesheet" href="Page_contact.css" />
  

<div id="corps" style="overflow:none; height: 745px; width: 1178px; border: 1px solid orange">
<h3>Pour nous contacter directement : <span>bioetbon.isep@gmail.com</span></h3>
<h3>Pour toute demande, merci de remplir le formulaire ci-dessous :</h3>
<h6> Champs obligatoires *</h6>
<br/>
<br/>
    <p>
        <form method="POST"> 
        <label>Prenom : *</label><input type="text" name="Prenom" size="25"/>
    </p>
    <p>
        <form method="POST"> 
        <label>Nom : *</label><input type="text" name="Nom" size="25" />
    </p>
    <p>
        <form method="POST"> 
        <label>Email : *</label><input type="text" name="Email" size="25" />
    </p>
    <!--<p>
        <form method="POST"> 
        <label>Telephone :</label><input type="text" name="Telephone" size="25" />
    </p>-->
    <br/>
    <br/>
    <p id="objet">

        <label>Objet : *</label><br/><input type="text" name="Objet" size="53" />

    </p>
    <form method="POST"> 
    <p id="Commentaire">
        <label>Commentaire : *</label><br/>
        <textarea name="Commentaire" type="text" rows="10" cols="50"></textarea>
    </p>

    <form method="POST"> 
    <p id="bouton1">
      <input type="submit" value="Envoyer" name='valider' style="width:130px"/>
    </p>

    <!-- <p id="bouton2">
      <input type="submit" value="Effacer" style="width:130px"/>
    </p>
    <form method="POST" action="email_traitement.php"> -->

      <?php 

        require_once('class.phpmailer.php');
        require_once('class.SMTP.php');
        require_once('bdd_connect.php');

        if(isset($_POST['valider'])){

          $to=$_POST['Email'];
          $subject=$_POST['Objet'];
          $Prenom=$_POST['Prenom'];
          $Nom=$_POST['Nom'];
          $mail = new PHPMailer();
          $message=$_POST['Commentaire'];
          $msg='<html>
          <body>
            <p><b>Vous nous avez posé une question </b>'.$Prenom.'<b> et nous vous en remercions</b></p></br>   
            <p>Le sujet : '.$subject.'</p>
            <p>Votre message est :"'.$message.'"</p></br></br>
            <p>Vous êtes : '.$Prenom.' '.$Nom.'</p>
            <p>Votre email : '.$to.'</p></br></br>
            <p>Nous vous repondrons très prochainement.</p></br>
            <p>La team de BIO&BON vous remercie</p>
            <p>Le pole Com : bioetbon.isep@gmail.com</p>          
          </body>
        </html>';
          $mail->IsSMTP(); // enable SMTP
          $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
          $mail->SMTPAuth = true; // authentication enabled
          $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
          $mail->Host = "smtp.gmail.com";
          $mail->Port = 465; // or 587
          $mail->IsHTML(true);
          $mail->Username = "bioetbon.isep@gmail.com";
          $mail->Password = "bioetbon";
          $mail->CharSet = "utf-8";
          $mail->SetFrom('bioetbon.isep@gmail.com');
          $mail->Subject = $subject; ?> </br> <?php
          $mail->Body = $msg;
          $mail->AddAddress('quentin.lalle@gmail.com');
          $mail->AddCC($to,$Prenom);
          /**/



            if ( !$mail->Send() ) {
              echo "Echec de l'envoi du mail, Erreur: " . $mail->ErrorInfo;
            } else {
               ?> <div align="center"><h3 class="ok"><strong><?php echo "Message envoyé!"; ?></strong> </h3> </div> <?php
            }
        }

        unset($mail);

      ?>


</div>

     <?php
     include("footer.php");
     ?>
  </div>
  </body>
</html>
