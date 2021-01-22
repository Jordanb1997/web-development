<?php
$fp = fopen("cookie counter.txt", "r");
$size = filesize("cookie counter.txt");
$count = fread($fp, $size);
fclose($fp);
$ip = $_SERVER['REMOTE_ADDR'];
if($ip!='' && $_COOKIE['ip']!=$ip)
{
$count = $count + 1;
$fp = fopen("cookiecounter.txt", "w");
fwrite($fp, $count);
SetCookie("ip",$ip , time()+60*60*24);
}
echo "$count cookies";
?>