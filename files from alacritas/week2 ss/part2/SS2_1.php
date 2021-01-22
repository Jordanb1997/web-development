<!DOCTYPE html>
<html>
	<head>
		<title>Self-Study 2</title>
	</head>

	<body>
		<?php
			$a = 10.5;
			$b = 10;
			$sum = $a + $b;
			$sub = $a - $b;

			// "... $a ..." : replace $a with a value within the $a
			print("$a + $b = $sum<br>");
			print("$a - $b = $sub<br>");

			// '... $a ...' : $a is treated as a string
			if( $a == $b ) print('$a and $b is equal<br>');
			else print('$a and $b is not equal<br>');

			$str1 = "Hello ";
			$str2 = "World!";
			// . : concatenate two strings
			$str = $str1 . $str2;

			print("$str<br>");

			// type juggling
			$sum = $a + $str1;
			
			print("$a + $str1 = $sum<br>");

			$str1 = "10Hello ";
			$sum = $a + $str1;

			print("$a + $str1 = $sum<br>");
		?>
	<body>
</html>