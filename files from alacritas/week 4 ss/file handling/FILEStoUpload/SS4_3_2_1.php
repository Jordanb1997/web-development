<!DOCTYPE html>
<html>
	<head>
		<title>Self-study 3 - GET</title>
	</head>
	<body>
		<?php
			print ( "firstname : ".htmlspecialchars($_GET["firstname"])."<br>" );
			print ( "lastname : ".htmlspecialchars($_GET["lastname"])."<br>" );
			print ( "email : ".htmlspecialchars($_GET["email"])."<br>" );
			print ( "sex : ".htmlspecialchars($_GET["sex"])."<br>" );
		?>
	</body>
</html>