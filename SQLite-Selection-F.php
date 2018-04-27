<?php require("login.in.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Voyage Voyage</title>
	<!--link rel="stylesheet" href="ex1.css"-->
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.29" />
	<link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>

<body>
	<!-- ZONE HEADER -->
	<header>
			<a href="PageAccueil.php"><img src="images/logoComplet.png"></a>
		  <div id="SignInUp">
		    <a href="SignIN.php"</a><button>Sign In</button></a>
		    <a href="SignUP.php"</a><button>Sign Up</button></a>
				<a href="logout.php"</a><button>Log Out</button></a>
				<br><div id="NomVoyageClient"> <?php $login = $_SESSION["login"]; echo "$login"; ?></div>
		  </div>

	</header>
  	<br>
  <h1>Résultat de votre recherche</h1>
  	<br>

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

              if (!empty ( $_POST["Duréemin"]) && !empty ( $_POST["DuréeMax"])) {
                $dureemin = $_POST["Duréemin"];
                $dureemax = $_POST["DuréeMax"];
                $requete = $requete." AND \"$dureemin\"<=duree AND duree<= \"$dureemax\"";
              }
            }

            $resultF = $db->query($requete);
            unset($db);

        } catch(Exception $e) {
          echo $e->getMessage();
      }
    ?>

<section id="Voyages">

    <?php foreach($resultF as $row) : ?>

    				<div id="unVoyage">
    					<?php $image = $row['nomv'] ?>
    					<img src="images/<?php echo $image ?>.jpg">
    					<div >
    						<div id="NomVoyageClient"> <?php echo $row['nomv'] ?> </div>
    						<table>
    							<tr><td>Pays :</td> <td> <?php echo $row['pays'] ?> </td></tr>
    							<tr><td>Logement :</td> <td> <?php echo $row['logement'] ?> </td></tr>
    							<tr><td>Pension :</td> <td> <?php echo $row['pension'] ?> </td></tr>
    							<tr><td>Durée :</td> <td> <?php echo $row['duree']." nuit(s)" ?> </td></tr>
    							<tr><td>Tour Opérateur :</td> <td> <a href=<?php echo "https://".$row['urlto'] ?>> <?php echo $row['urlto'] ?> </a></td></tr>
    						</table>
    					</div>
    				</div>

    <?php endforeach ?>

    


  </section>

  <footer>
		<a href="PageAccueil.php"><img src="images/logoSimple.png"></a>
		<a href="MentionsLegales.php"</a><button>Mentions Légales</button></a>
		<a href="NousContacter.php"</a><button>Nous Contacter</button></a>
	</footer>
</body>

</html>
