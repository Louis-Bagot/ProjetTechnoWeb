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
	<h1>Nous contacter</h1>
	<br>
	Nos commerciaux sont à votre disposition du mardi au samedi, de 9h à 18h. Vous pouvez également les joindre par mail.
	<br>
	<br>
	<?php
	include("afficher_commerciaux.php");
	?>
	</form>
	<br>
	A bientôt dans notre agence !
	<br>
	<br>
	<!-- ZONE FOOTER -->
	<footer>
		<a href="PageAccueil.php"><img src="images/logoSimple.png"></a>
		<a href="MentionsLegales.php"</a><button>Mentions Légales</button></a>
		<a href="NousContacter.php"</a><button>Nous Contacter</button></a>
	</footer>
</body>

</html>
