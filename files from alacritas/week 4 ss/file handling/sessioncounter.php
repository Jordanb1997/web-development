<?php
 session_start();
$fp = fopen("counter.txt", "r");
$size = filesize("counter.txt");
$count = fread($fp, $size);
fclose($fp);
if(!isset($_SESSION['count']))
{
$_SESSION['count']= "set";
$count = $count + 1;
$fp = fopen("sessioncounter.txt", "w");
fwrite($fp, $count);
}
echo "$count sessions";
?>