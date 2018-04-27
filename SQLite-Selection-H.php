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

          $email = $_SESSION["login"];

        	/* requete de selection */
          $requete = "SELECT Reservation.num, Reservation.prix, Reservation.dated, Reservation.datef, Reservation.nomv, Reservation.transport, Voyage.logement, Voyage.pension, Voyage.urlto FROM Client, Contenir, Reservation, Voyage WHERE Client.email=\"$email\" AND Client.nomc=Contenir.nomc AND Contenir.num=Reservation.num AND Voyage.nomv=Reservation.nomv " ;

        	$resultH = $db->query($requete);
        	unset($db);
        	//foreach($resultH as $row)
        	//{
          //  echo '<p>'.$row['nomc'].' - '.$row['prenomc'].' - '.$row['email'].' - '.$row['num'].' - '.$row['prix'].' - '.$row['nomv'].' - '.$row['logement'].'</p>';
        	//}
      }
      catch(Exception $e)
      {
      	echo $e->getMessage();
      }
    ?>
  </body>
</html>
