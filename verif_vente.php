<?php
session_start();
if(isset($_POST['annuler'])){ ?>
    <script type="text/javascript">

	    	if (confirm('Etes-vous sur de vouloir annuler la vente ?')){
	    		document.location.href="page_accueil.php"; 
			}
			else {
				document.location.href="page_vente.php";	
			}
	</script>
	<?php
	;}
	else {
		header('Location: /APP_INFO/Page_vente.php');
	}
	?>
