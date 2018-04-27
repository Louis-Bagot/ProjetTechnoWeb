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
				<form action ="traitementFiltrage.php" method ="POST">
				<form action="POST">
			    <legend><strong> Filtrer</strong></legend>
					<br>
					Destination : <select name="Destination" >
						<?php
								require("SQLite-Selection-PA.php");
						?>
						<?php foreach($resultF as $row) : ?>
								<option value=<?php echo $row['pays'] ?>> <?php echo $row['pays'] ?> </option>
						<?php endforeach ?>
					</select><br/>

					Logement : <select name="Logement">
						<option value="">(Non précisé)</option>
						<?php
								require("SQLite-Selection-PA.php");
						?>
						<?php foreach($resultF as $row) : ?>
								<option value=<?php echo $row['logement'] ?>> <?php echo $row['logement'] ?> </option>
						<?php endforeach ?>
					</select><br/>

					Pension :	<select name="Pension" >
						<option value="">(Non précisé)</option>
						<?php
								require("SQLite-Selection-PA.php");
						?>
						<?php foreach($resultF as $row) : ?>
								<option value=<?php echo $row['pension'] ?>> <?php echo $row['pension'] ?> </option>
						<?php endforeach ?>
					</select><br/>

					Durée : <input type="text" name="Durée" id="Durée" placeholder="Nombre de nuits... (au moins 1)" /><br/> </td>
					<br/>
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

		<?php
				//require_once("SQLite-Creation.php");
				//require_once("SQLite-Insertion.php");
				require("SQLite-Selection-PA.php");
		?>

		<section id="Voyages">

<?php foreach($resultPA as $row) : ?>

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
