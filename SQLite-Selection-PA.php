<?php require("login.in.php") ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Page PHP</title>
  </head>
  <body>
    <?php
      error_reporting(E_ALL);

      try
      {
        	/* creation de la BD */
        	$db = new PDO("sqlite:./data/VoyageVoyage.sqlite");

        	/* errors -> exceptions */
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        	/* requete de selection */
        	$requete = "SELECT nomv, logement, pension, duree, urlto FROM Voyage";

        	$resultPA = $db->query($requete);
        	unset($db);
        	//foreach($resultPA as $row)
        	//{
        	//  echo '<p>'.$row['nomv'].' - '.$row['logement'].' - '.$row['pension'].' - '.$row['duree'].' - '.$row['urlto'].'</p>';
        	//}
      }
      catch(Exception $e)
      {
	echo $e->getMessage();
      }
    ?>
  </body>
</html>
