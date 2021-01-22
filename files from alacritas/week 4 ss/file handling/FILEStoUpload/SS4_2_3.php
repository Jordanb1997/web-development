<?php
	session_start();
	session_destroy();
?>
<html>
	<head>
		<title>Self-Study 3</title>
	</head>

	<body>
		<?php
			print ( "Your session is destroyed<br><br>" );
			print ( "Your session ID ". session_id()."<br><br>" );
		?>
		<a href="SS4_2_2.php">Previous page (2)</a>
	<body>
</html>