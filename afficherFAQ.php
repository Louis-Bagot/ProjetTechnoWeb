
	<?php
		$fichier=fopen("FAQ.txt",'r');
		while (!feof($fichier)) {
			$ligne = fgets($fichier);
			echo $ligne;
		}
		fclose($fichier);
	?>
