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
			print( 'The value of $_SESSION[ "str" ] in Page2<br>' );
			print ( $_SESSION[ "str" ]."<br><br>" );
		?>
		<a href="SS4_2_1.php">Previous page (1)</a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="SS4_2_3.php">Next page (3)</a>
	<body>
</html>