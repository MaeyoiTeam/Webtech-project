<?php
session_start();
include("../config.php");
date_default_timezone_set("Asia/Bangkok");
$current_time=date("G:i:s", time()); 

if(isset($_SESSION['coursedate'])){
$sqlStart = "UPDATE coursedate SET current_start = '".$current_time."',Active = 'on' WHERE ID = '".$_SESSION["coursedate"]."' ";;
$result=mysqli_query($objCon,$sqlStart);
}
  header("Location: {$_SERVER['HTTP_REFERER']}");
  mysqli_close($objCon);

?>