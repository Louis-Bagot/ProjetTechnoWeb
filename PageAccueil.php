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
	<header>
	  <a href="PageAccueil.php"><img src="images/logoComplet.png"></a>
	  <div id="SignInUp">
	    <a href="SignIN.php"</a><button>Sign In</button></a>
	    <a href="SignUP.php"</a><button>Sign Up</button></a>
			<a href="logout.php"</a><button>Log Out</button></a>
			<br><div id="NomVoyageClient"> <?php $login = $_SESSION["login"]; echo "$login"; ?></div>
		</div>
	</header>
	<hr id="headerHR">
	<br>
	<div id="frames">
		<!-- SECTION GAUCHE (FILTRAGE) -->
		<section id="Filtrage">
			<!-- Bouton Historique -->
			<a href="Historique.php"</a><button>Historique</button></a>

			<!-- Filtrage -->
		  <fieldset>
				<form action="POST">
			    <legend><strong> Filtrer</strong></legend>
					<br>
					Destination :	<br> <select name="Destination" multiple >
								<option value="Espagne"> Espagne </option>
								<option value="Argentine"> Argentine </option>
								<option value="Canada"> Canada </option>
								<option value="..."> ...
							</select><br/>
					Logement : <select name="Logement" >
								<option value="Hôtel"> Hôtel </option>
								<option value="Camping"> Camping </option>
								<option value="Appartement"> Appartement </option>
								<option value="Igloo"> Igloo
							</select><br/>
					Pension :	<select name="Pension" >
								<option value="Pension Complète"> Pension Complète </option>
								<option value="Demi-Pension"> Demi-Pension </option>
								<option value="Petit Déjeuner"> Petit Déjeuner </option>
								<option value="(Aucun)"> Aucun
							</select><br/>
					Durée : <input type="text" name="Durée" id="Durée" placeholder="Nombre de nuits... (au moins 1)" /><br/> </td>
					<!-- (Validation ou effaçage) -->
					<br>
					<div >
						<input type="submit" name="action" value="Valider"/>
						<input type="reset" value="Effacer"/>
					</div>
				</form>
			</fieldset>

			<!-- Bouton FAQ -->
			<a href="FAQ.php"</a><button>FAQ</button></a>
		</section>

		<!-- SECTION VOYAGES -->

		<section id="Voyages">
			<div id="unVoyage">
				<?php $image = "images/Argentine caliente.jpg" ?>
				<img src="<?php echo $image ?>">
				<div >
					<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
					<table>
						<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
						<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
						<tr><td>Durée :</td> <td> (champ Durée)</td></tr>
						<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
					</table>
				</div>
			</div>

			<div id="unVoyage">
				<?php $image = "images/Voyage oriental.jpg" ?>
				<img src="<?php echo $image ?>">
				<div >
					<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
					<table>
						<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
						<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
						<tr><td>Durée :</td> <td> (champ Durée)</td></tr>
						<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
					</table>
				</div>
			</div>

			<div id="unVoyage">
				<?php $image = "images/CapVert.png" ?>
				<img src="<?php echo $image ?>">
				<div >
					<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
					<table>
						<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
						<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
						<tr><td>Durée :</td> <td> (champ Durée)</td></tr>
						<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
					</table>
				</div>
			</div>

			<div id="unVoyage">
				<?php $image = "images/Bienvenue au pays des kangourous.jpg" ?>
				<img src="<?php echo $image ?>">
				<div >
					<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
					<table>
						<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
						<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
						<tr><td>Durée :</td> <td> (champ Durée)</td></tr>
						<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
					</table>
				</div>
			</div>

			<div id="unVoyage">
				<?php $image = "images/Grand froid.jpg" ?>
				<img src="<?php echo $image ?>">
				<div >
					<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
					<table>
						<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
						<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
						<tr><td>Durée :</td> <td> (champ Durée)</td></tr>
						<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
					</table>
				</div>
			</div>

			<div id="unVoyage">
				<?php $image = "images/Ile de beauté.jpg" ?>
				<img src="<?php echo $image ?>">
				<div >
					<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
					<table>
						<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
						<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
						<tr><td>Durée :</td> <td> (champ Durée)</td></tr>
						<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
					</table>
				</div>
			</div>

			<div id="unVoyage">
				<?php $image = "images/Au coeur des traditions.jpg" ?>
				<img src="<?php echo $image ?>">
				<div >
					<div id="NomVoyageClient"> (Champ nom du Voyage)</div>
					<table>
						<tr><td>Logement :</td> <td> (champ Logement)</td></tr>
						<tr><td>Pension :</td> <td> (champ Pension)</td></tr>
						<tr><td>Durée :</td> <td> (champ Durée)</td></tr>
						<tr><td>Tour Opérateur :</td> <td> (champ TO) <a href="https://www.fram.fr">www.fram.fr</a></td></tr>
					</table>
				</div>
			</div>
		</section>
	</div>

	<br><br>
	<hr id="footerHR">
	<br>
	<!-- ZONE FOOTER -->
	<footer>
		<a href="PageAccueil.php"><img src="images/logoSimple.png"></a>
		<a href="MentionsLegales.php"</a><button>Mentions Légales</button></a>
		<a href="NousContacter.php"</a><button>Nous Contacter</button></a>
	</footer>
</body>
</html>
