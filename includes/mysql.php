<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db = "webdev";
$mconnect = mysql_connect($localhost, $username, $password) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());
?>