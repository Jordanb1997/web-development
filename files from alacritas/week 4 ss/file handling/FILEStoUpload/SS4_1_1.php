<!DOCTYPE html>
<html>
	<head>
		<title>Self-Study 2</title>
	</head>

	<body>
		<?php
			function fileWrite( $fileName, $str ) {
				$handle = fopen( $fileName, "a+" );
				fwrite( $handle, $str );
				fclose( $handle );
			}

			fileWrite( "sample.txt", "Hello World!\n" );
			fileWrite( "sample.txt", "Hello Australia!\n" );
			fileWrite( "sample.txt", "Hello Tasmania!\n" );
			fileWrite( "sample2.txt", "Hello Launceston!\n" );
			fileWrite( "sample2.txt", "Hello Newnham!\n" );
			fileWrite( "sample2.txt", "Hello UTas!\n" );
			
		?>
    </body>
</html>