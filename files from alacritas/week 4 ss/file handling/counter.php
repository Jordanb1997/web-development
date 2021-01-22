<?php
	$fp = fopen("counter.txt", "r");
	$size = filesize("counter.txt);
	$count = fread($fp, $size);

	fclose($fp);

	$count = $count + 1;
	$fp = fopen("counter.txt", "w");
	fwrite($fp, $count);
	echo "$count views";
?>
