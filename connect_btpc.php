<?php
//parametre de connexion à la base de donnée
$dbhost="hostingmysql77.amen.fr";
$dbuser="cm119701";
$dbpass="nJ]j8Ahm`YwSq87";
$dbname="cm119701";

//connexion a la base
mysql_connect($dbhost,$dbuser,$dbpass) or die (mysql_error());
mysql_selectdb($dbname);
?>