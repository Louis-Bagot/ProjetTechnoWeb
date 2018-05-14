
<?php
  $fichier=fopen("mentionslegales.txt",'r');
  while (!feof($fichier)) {
    $ligne = fgets($fichier);
    echo $ligne;
  }
  fclose($fichier);
?>
