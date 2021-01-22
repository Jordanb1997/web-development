<!DOCTYPE html>
<html>
<?php
	//put the comment
	$author ="jordan";
	$dateCreated ="11.3.18";
?>
	<head><title>My First Web Page - php edition</title></head>
	
	<body>
		<h1> My PHP Home Page</h1>
		<p></p>
		<br>
		<ul>
			<li>Author: <?php echo $author; ?></li>
			<li>Date updated: <?php echo $dateCreated; ?></li>
		</ul>
		
		<?php
		echo "hello world"."<br>";
		echo "this is my first php code"."<br>";
		echo "date: ".date('Y.M.d');
		?>
	</body>
</html>