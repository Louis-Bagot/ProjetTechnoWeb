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
	  <a href="PageAccueil.html"><img src="images/logoComplet.png"></a>
	  <div id="SignInUp">
	    <a href="SignIn.html"</a><button>Sign In</button></a>
	    <a href="SignUp.html"</a><button>Sign Up</button></a>
	  </div>
	</header>
	<br>
	<h1>FAQ</h1>

	<div id="framesFAQ">

		<section id="ajoutMessage">
			<form action ="ajouterFAQ.php" method ="POST">
			<form action="POST">
			  <fieldset>
			    <legend>Ajouter un nouveau message</legend>
					<table>
						<tr>
							<td><label>Pseudo :</label></td>
							<td><input type="text" name="monPseudo" id="nom" placeholder="Saisissez votre pseudo"/></td>
						</tr>
					</table>
			    <legend>Message :</legend>
			    <textarea name="texte" rows="10" cols="80" placeholder="Exprimez-vous !"></textarea>
			  <p><input type="submit" name="action" value="Poster le message" />
			  <input type="reset" value="Effacer"/>
			</p>
			</fieldset>
			</form>
		</section>

		<section id="messagesPostes">
			<fieldset>
				<legend>Messages postés</legend>
				<table>
				<?php
				include("afficherFAQ.php");
				?>
				</table>
			</fieldset>
		</section>
	</div>



	<!-- ZONE FOOTER -->
	<footer>
		<table>
			<td><img src="images/logoSimple.png"></td>
			<td><a href="MentionsLegales.html"</a><button>Mentions Légales</button></a></td>
			<td><a href="NousContacter.php"</a><button>Nous Contacter</button></a></td>
		</table>

	</footer>
</body>

</html>
