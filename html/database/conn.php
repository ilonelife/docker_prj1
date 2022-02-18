<?php
$servername = "host.docker.internal";
$username = "oneslife";
$password = "semin";
$mysql_database = 'test';
$mysql_port = '52000';
$mysql_charset = 'UTF8';

// Create connection
$conn = new mysqli($servername, $username, $password,$mysql_database, $mysql_port, $mysql_charset);

?>
