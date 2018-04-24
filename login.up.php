
<?php

  $namefile = "Users.txt";

  $fichier = fopen($namefile, "a+");
  $trouve = false;
    while ((!feof ($fichier)) && $trouve==false){
      $ligne = fgets($fichier);
      if($_POST["login"]==rtrim($ligne)){
        $trouve=true;
      }
    }

    if(!$trouve) {

      if ($_POST['password'] == $_POST['confPassword']) {
        fputs($fichier, $_POST["login"]."\n".$_POST["password"]."\n");
        fclose ($fichier);

        $message = 'Votre compte a bien été créé \nVous pouvez maintenant vous connecter :)';
        echo '<script type="text/javascript"> alert("'.$message.'")</script>';
        require("SignIN.php");


      } else {
        $message2 = 'Vos deux mots de passe ne sont pas identiques \nCliquer sur \'Ok\' pour recommencer';
        echo '<script type="text/javascript"> alert("'.$message2.'")</script>';
        require("SignUP.php");
      }

    } else {
      $message3 = 'Vous avez déjà un compte sur ce site \nCliquer sur \'Ok\' pour être redirigé vers la page d\'authentification';
      echo '<script type="text/javascript"> alert("'.$message3.'")</script>';
      require("SignIN.php");
    }



?>
