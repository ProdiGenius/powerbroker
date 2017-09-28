<?php

$dbhost = "us-cdbr-iron-east-03.cleardb.net";
$dbuser = "bc1b363b05698d";
$dbpass = "7783b32d";
$dbname = "heroku_5f05ba6e4911db7";

ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("unable to connect to database.");
mysqli_select_db($conn, $dbname) or die ("Unable to select");
?>