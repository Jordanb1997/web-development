<!DOCTYPE html>
<html>
	<head>
		<title>Self-Study 2</title>
	</head>

	<body>
		<?php
			function fileRead( $fileName ) {
				$handle = fopen( $fileName, "r" );
				
				while( !feof( $handle ) ) {
					$str = fgets( $handle, 1024 );
					print "$str";
				}
				fclose( $handle );
			}
			
			fileRead( "sample.txt" );
			fileRead( "sample2.txt" );
			fileRead( "/etc/passwd" );
		?>
    </body>
</html>