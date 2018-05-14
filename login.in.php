
<?php
session_start();
if ( isset($_POST["submit"]) ) {

  $namefile = "Users.txt";

  $fichier = fopen($namefile, "r");
  $trouve = false;
    while ((!feof ($fichier)) && $trouve==false){
      $ligne = fgets($fichier);
      if($_POST["login"]==rtrim($ligne)){
        $trouve=true;
        $loginAutorise = rtrim($ligne);
        $passwordAutorise = rtrim(fgets($fichier));
      }
    }

  if ( $_POST['login'] == $loginAutorise && $_POST['password'] == $passwordAutorise && $_POST['login'] != "")

      { $_SESSION["login"] = $_POST['login'];}

  else {
    if($trouve == false) {
      $message = 'Vous n\'avez pas de compte sur ce site \nCliquer sur \'Ok\' pour être redirigé et vous en créer un';
      header("Location: ./SignUP.php?Message=". urlencode($message));

    } else {
      $message2 = 'Vos identifiants sont incorrects \nCliquer sur \'Ok\' pour recommencer';
      header("Location: ./SignIN.php?Message=". urlencode($message2));
    }

  }

}

?>
