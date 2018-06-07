<?php

// Connection variables
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = "P@ssw0rd"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "rigs"; // MySQL Database name

// Connect to MySQL Database
$db = mysqli_connect($host, $user, $password, $database) or die("Could not connect to database");

// Select MySQL Database
#mysql_select_db($database, $db);

?>

