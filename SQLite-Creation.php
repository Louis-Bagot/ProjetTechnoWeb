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
	$requeteVoyage = "CREATE TABLE IF NOT EXISTS Voyage (
	nomv TEXT NOT NULL PRIMARY KEY,
	pays TEXT NOT NULL,
  villev TEXT,
  logement TEXT NOT NULL,
  pension TEXT NOT NULL,
  duree INTEGER,
  nomto TEXT NOT NULL,
  urlto TEXT NOT NULL
	)";
  $requeteClient = "CREATE TABLE IF NOT EXISTS Client (
	nomc TEXT NOT NULL PRIMARY KEY,
	prenomc TEXT NOT NULL PRIMARY KEY,
  email TEXT
	)";
  $requeteContenir = "CREATE TABLE IF NOT EXISTS Contenir (
	num INTEGER PRIMARY KEY,
  nomc TEXT NOT NULL PRIMARY KEY,
	prenomc TEXT NOT NULL PRIMARY KEY
	)";
  $requeteReservation = "CREATE TABLE IF NOT EXISTS Reservation (
	num INTEGER PRIMARY KEY,
	prix INTEGER,
  dated DATE,
  datef DATE,
  transport TEXT NOT NULL,
  nomv TEXT NOT NULL,
  nomc TEXT NOT NULL ,
	prenomc TEXT NOT NULL,
  nomco TEXT NOT NULL ,
	prenomco TEXT NOT NULL

	)";

	/* creation de la BD */
	$db = new PDO("sqlite:./data/VoyageVoyage.sqlite");
	/* errors -> exceptions */
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	/* requete de creation */
	$db->query($requeteVoyage);
	$db->query($requeteClient);
	$db->query($requeteContenir);
	$db->query($requeteReservation);

	unset($db);
	echo 'Table créée';
      }
      catch(PDOException $e)
      {
	echo $e->getMessage();
      }
    ?>
  </body>
</html>
