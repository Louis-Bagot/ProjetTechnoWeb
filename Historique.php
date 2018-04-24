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

	<?php
			if(!isset($_SESSION["login"])) {
				$message = 'Vous n\'êtes pas authentifié \nCliquer sur \'Ok\' pour vous connecter';
				header("Location: ./SignIN.php?Message=". urlencode($message));
			}
	 ?>

	<h1>Votre Historique</h1>
	<br>
	<section id="Voyages">
		<div id="unVoyage">
			<?php $image = "Voyage oriental"?>
			<img src="images/<?php echo $image ?>.jpg">
			<div >
				<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
				<table>
					<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
					<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
					<tr><td>Numéro de facture :</td> <td> (champ num facture)</td></tr>
					<tr><td>Prix payé :</td> <td> (champ prix)</td></tr>
					<tr><td>Dates :</td> <td> (champ dated -> datef)</td></tr>
					<tr><td>Transport :</td> <td> (champ transport)</td></tr>
					<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
				</table>
			</div>
		</div>

		<div id="unVoyage">
			<?php $image = "Italie" ?>
			<img src="images/<?php echo $image ?>.png">
			<div >
				<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
				<table>
					<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
					<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
					<tr><td>Numéro de facture :</td> <td> (champ num facture)</td></tr>
					<tr><td>Prix payé :</td> <td> (champ prix)</td></tr>
					<tr><td>Dates :</td> <td> (champ dated -> datef)</td></tr>
					<tr><td>Transport :</td> <td> (champ transport)</td></tr>
					<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
				</table>
			</div>
		</div>

		<div id="unVoyage">
			<?php $image = "Madagascar" ?>
			<img src="images/<?php echo $image ?>.jpg">
			<div >
				<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
				<table>
					<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
					<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
					<tr><td>Numéro de facture :</td> <td> (champ num facture)</td></tr>
					<tr><td>Prix payé :</td> <td> (champ prix)</td></tr>
					<tr><td>Dates :</td> <td> (champ dated -> datef)</td></tr>
					<tr><td>Transport :</td> <td> (champ transport)</td></tr>
					<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
				</table>
			</div>
		</div>
	</section>


	<!-- ZONE FOOTER -->
	<footer>
		<a href="PageAccueil.php"><img src="images/logoSimple.png"></a>
		<a href="MentionsLegales.php"</a><button>Mentions Légales</button></a>
		<a href="NousContacter.php"</a><button>Nous Contacter</button></a>
	</footer>
</body>

</html>
