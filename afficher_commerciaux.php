
	<?php
		$fichier=fopen("commerciaux.txt",'r');
		while (!feof($fichier)) {
			$ligne = fgets($fichier);
			echo $ligne;
		}
		fclose($fichier);
	?>
