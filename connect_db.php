<?php

// maak een var die maar een keer gedefineerd kan worden. oftewijl maak een constante zoals C
define("SERVERNAME" ,"localhost");
define("DB" ,"afasie_pr3");
define("USERNAME" ,"targa2002260");
define("PASSWORD" ,"9januari");
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB);
?>

