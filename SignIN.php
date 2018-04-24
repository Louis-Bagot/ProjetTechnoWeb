<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Sign-IN</title>
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
				<br> <?php $login = $_SESSION["login"]; echo "$login"; ?>
      </div>
    </header>
    <hr id="headerHR">
    <br>

  <?php
    if (isset($_GET['Message'])) {
        echo '<script type="text/javascript"> alert("'.$_GET['Message'].'") </script>';
      }
    ?>

    <form action="PageAccueil.php"  method="POST">
      <fieldset>
        <legend>Identifiants :</legend>
        <table>
          <tr>
             <td> <label>E-mail :</label> </td>
             <td><input type="text" name="login" placeholder="Saissisez votre e-mail" size="30" /> </td>
   				</tr>
   				<tr>
            <td> <label>Mot de Passe :</label> </td>
  					<td> <input type="password" name="password" placeholder="Saissisez votre mot de passe" size="30" /> </td>
  				</tr>
  			</table>
      </fieldset>

      <p>
        <input type="submit" name="submit" value="Se connecter"/>
        <input type="reset" value="Effacer" />
      </p>
    </form>

    <br><br>
  	<hr id="footerHR">
  	<br>
  	<!-- ZONE FOOTER -->
  	<footer>
  		<img src="images/logoSimple.png"></td>
  		<a href="MentionsLegales.php"</a><button>Mentions Légales</button></a>
  		<a href="NousContacter.php"</a><button>Nous Contacter</button></a>
  	</footer>

  </body>
</html>
