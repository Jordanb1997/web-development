<!DOCTYPE html>
<html>
	<head>
		<title>tute 3</title>
	</head>

	<body>
		<?php
        
			$wtf = array
            (
                array("jersey", 2, 8, 4, 2, 4),
                array("pete", 0, 0, 3, 8, 8),
                array("joel", 4, 6, 4, 4, 4),
                array("martin", 8, 8, 8, 8, 8)
			);
        
            //sitepoint.com/community/t/multidimensional-array-to-html-table/3093/3
        
            echo '<table border="1">';
            echo '<tr><th></th><th>monday</th><th>tuesday</th><th>wednesday</th><th>thursday</th><th>friday</th></tr>';
            foreach( $wtf as $wtf )
            {
                echo '<tr>';
                foreach( $wtf as $key )
                {
                    echo '<td>'.$key.'</td>';
                }
                echo '</tr>';
            }
            echo '</table>';

			print("<br>");
        
            echo 'time spent on viewing forum last week<br><br>'

            foreach( $wtf as $wtf)
            {
                
            }



		?>
        
        
    </body>
</html>