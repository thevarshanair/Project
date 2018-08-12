<?php

/** The name of the database */
define('DB_NAME', 'epiz_22352730_jobportal');

/** MySQL database username */
define('DB_USER', 'epiz_22352730');

/** MySQL database password */
define('DB_PASSWORD', 'Ul8tcpfeodlG5Q');

/** MySQL hostname */
define('DB_HOST', 'sql209.epizy.com');

// connect using PDO
try { // attempt to create a connection to database
	$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
}
catch(PDOException $e) { // if it fails, we echo the error and die.
	echo $e->getMessage();
	die();
}
?>