<?php

include("config.php");
date_default_timezone_set("Asia/Bangkok");
$current_time=date("G:i:s", time()); 

$x ='1';

$time1=strtotime("+".$x." min");

echo $time1;
echo "<br>";
echo date("G:i:s", $time1); 
echo "<br>";
echo time();
echo "<br>";
echo date("G:i:s", time());
?>
