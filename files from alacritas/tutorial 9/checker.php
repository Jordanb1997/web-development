<?php
	include('db_conn.php');
		
	
	$cities=$_GET["cities"];
	
    $result=$mysqli->query("SELECT `Population` FROM `countries_1` WHERE Cities='$cities'");
    $result_count = $result->num_rows;
	
	// Echo here!! 
	//echo "test";
	if ($result_count == 0) {
		echo "$result";
	}
?> 