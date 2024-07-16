<?php
//parametre de connexion à la base de donnée
$dbhost="mysqlhost5";
$dbuser="cm191718";
$dbpass="2mppmhgn";
$dbname="cm191718";

//connexion a la base
mysql_connect($dbhost,$dbuser,$dbpass) or die (mysql_error());
mysql_selectdb($dbname);
?>