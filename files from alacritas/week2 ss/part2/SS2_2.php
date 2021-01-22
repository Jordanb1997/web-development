<!DOCTYPE html>
<html>
	<head>
		<title>Self-Study 2</title>
	</head>

	<body>
		<?php
			function selection_sort(&$arr) {
				// count(): returns the number of elements in an array
				$n = count($arr);
				
				for($i = 0; $i < count($arr); $i++) {
					$min = $i;
					
					for($j = $i + 1; $j < $n; $j++)
						if($arr[$j] < $arr[$min])
							$min = $j;
					
					$tmp = $arr[$min];
					$arr[$min] = $arr[$i];
					$arr[$i] = $tmp;
				}
			}
			
			/* test insertion sort */
			$arr = array( 7, 1, 2, 6 );
			
			print("Before sorting<br>");
			print("$arr[0]<br>");
			print("$arr[1]<br>");
			print("$arr[2]<br>");
			print("$arr[3]<br>");

			print("<br>");
			
			selection_sort($arr);
			print("After sorting by using selection sort<br>");
			print("$arr[0]<br>");
			print("$arr[1]<br>");
			print("$arr[2]<br>");
			print("$arr[3]<br>");
		?>
    </body>
</html>