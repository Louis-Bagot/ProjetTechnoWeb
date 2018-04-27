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

        try {
            /* creation de la BD */
            $db = new PDO("sqlite:./data/VoyageVoyage.sqlite");

            /* errors -> exceptions */
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset ($_POST ["action"])) {

            $destination = $_POST ["Destination"];
            $requete = "SELECT * FROM Voyage WHERE pays= \"$destination\"";

            if (!empty ( $_POST["Logement"])) {

              $logement = $_POST["Logement"];
              $requete = $requete." AND logement=\"$logement\"";
            }

            if (!empty ( $_POST["Pension"])) {

              $pension = $_POST["Pension"];
              $requete = $requete." AND pension=\"$pension\"";
            }

            if (!empty ( $_POST["Duréemin"]) & !empty ( $_POST["DuréeMax"])) {
              $dureemin = $_POST["Duréemin"];
              $dureemax = $_POST["DuréeMax"];
            $requete = $requete." AND \"$dureemin\"<=duree AND duree<= \"$dureemax\"";
            }

          } else {
              $requete = "SELECT nomv, pays, logement, pension, duree, urlto FROM Voyage";
          }


            $resultF = $db->query($requete);
            unset($db);
            foreach($resultF as $row) {
              echo '<p>'.$row['nomv'].' - '.$row['pays'].' - '.$row['logement'].' - '.$row['pension'].' - '.$row['duree'].' - '.$row['urlto'].'</p>';
            }

        } catch(Exception $e) {
          echo $e->getMessage();
      }
    }

    require("PageAccueil.php");

    ?>
  </body>
</html>
