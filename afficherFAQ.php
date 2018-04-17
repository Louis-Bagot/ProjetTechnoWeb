
	<?php
		$fichier=fopen("faq.txt",'r');
		while (!feof($fichier)) {
			$ligne = fgets($fichier);
			echo $ligne;
		}
		fclose($fichier);
	?>
