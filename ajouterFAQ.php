<?php
		$fichier=fopen("FAQ.txt",'a');
		if(isset ($_POST ["action"]) && !empty ( $_POST ["monPseudo"]) && !empty ( $_POST ["texte"])) {
      fputs($fichier,$_POST ["monPseudo"]." a écrit le ".date("l j F Y, G.i.s")." :<br/>".$_POST ["texte"]."<br/><br/>");
		}
		else {
      echo "Tous les champs doivent être renseignés pour poster un message !";
		}
		fclose($fichier);
	?>
