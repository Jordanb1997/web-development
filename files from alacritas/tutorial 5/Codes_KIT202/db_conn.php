<?php
session_start();
//connect to mysql
$mysqli = new mysqli('localhost', 'jordanb7', '420545', 'jordanb7');

if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>