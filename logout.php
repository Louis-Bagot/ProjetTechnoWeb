<?php
require("login.in.php");
session_destroy();
header("Location: ./PageAccueil.php");
?>
