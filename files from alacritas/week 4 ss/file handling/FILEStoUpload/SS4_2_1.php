<?php
	session_start();
?>
<html>
	<head>
		<title>Self-Study 3</title>
	</head>

	<body>
		<?php
			print ( "Your session ID ". session_id()."<br><br>" );

			$_SESSION[ "str" ] = "Hello World!";
			print ( 'The value of $_SESSION[ "str" ] in Page1<br>' );
			print ( $_SESSION[ "str" ]."<br><br>" );
		?>
		<a href="SS4_2_2.php">Next page (2)</a>
    </body>
</html>