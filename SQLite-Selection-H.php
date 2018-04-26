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

          echo "Befor Requete";
        	/* requete de selection */
        	$requete = "SELECT * FROM Voyage, Reservation, Client, Contenir WHERE Contenir.num=Reservation.num AND Voyage.nomv=Reservation.nomv AND Client.nomc=Contenir.nomc AND Client.email=\"quentin.loiseau@wanadoo.fr\" ";
          //$requete = " SELECT Reservation.num, Contenir.nomc FROM Reservation, Contenir WHERE Reservation.num=Contenir.num";
          //$requete = "SELECT nomc, prenomc FROM Client WHERE email=\"quentin.loiseau@wanadoo.fr\" ";

        	$resultH = $db->query($requete);
        	unset($db);
        	foreach($resultH as $row)
        	{
        	  //echo '<p>'.$row['nomv'].' - '.$row['logement'].' - '.$row['pension'].' - '.$row['urlto'].' - '.$row['prix'].' - '.$row['dated'].' - '.$row['datef']..' - '.$row['transport'].'</p>';
            //echo '<p>'.$row['nomc'].' - '.$row['prenomc'].' - '.$row['email'].'</p>';
            //echo gettype($row['nomc']);
            //echo gettype($row['prenomc']);
            //echo gettype($row['email']);
            echo "Rien trouvé";
            echo '<p>'.$row['nomv'].'<p>';
        	}
      }
      catch(Exception $e)
      {
	echo $e->getMessage();
  echo "exception";
      }
    ?>
  </body>
</html>
