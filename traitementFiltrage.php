<?php
		if(isset ($_POST ["action"]) {
			$requete = "SELECT * FROM Voyage WHERE pays= \"$_POST [\"Destination\"]\"";

			if (!empty ( $_POST["Logement"])) {
				$requete = $requete." AND logement=\"$_POST[\"Logement\"])\"";
			}

			if (!empty ( $_POST["Pension"])) {
				$requete = $requete." AND pension=\"$_POST[\"Pension\"])\"";
			}

			if (!empty ( $_POST["Durée"])) {
			$requete = $requete." AND duree=\"$_POST[\"Durée\"])\"";
			}
			$requete = $requete.";";

			try {
        	/* creation de la BD */
        	$db = new PDO("sqlite:./data/VoyageVoyage.sqlite");

        	/* errors -> exceptions */
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$resultF = $db->query($requete);
        	unset($db);
        	foreach($resultF as $row) {
	        	echo '<p>'.$row['nomv'].' - '.$row['logement'].' - '.$row['pension'].' - '.$row['duree'].' - '.$row['urlto'].'</p>';
        	}
      } catch(Exception $e) {
				echo $e->getMessage();
				echo "exception acces BD Filtrage"
      }
		}
		include("PageAccueil.php");
	?>
