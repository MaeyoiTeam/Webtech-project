<?php
session_start();
include("../config.php");
date_default_timezone_set("Asia/Bangkok");
$current_time=date("G:i:s", time()); 

$sql="SELECT active FROM coursedate WHERE ID='".$_SESSION['coursedate']."'";
$result=mysqli_query($objCon,$sql);
$row=mysqli_fetch_row($result);
  mysqli_free_result($result);



if(isset($_SESSION['coursedate'])){
if($row[0]=='wait'){
$sqlStart = "UPDATE coursedate SET current_start = '".$current_time."',active = 'on' WHERE ID = '".$_SESSION["coursedate"]."' ";;
$result=mysqli_query($objCon,$sqlStart);
}
else if($row[0]=='break'){
$sqlStart = "UPDATE coursedate SET active = 'on' WHERE ID = '".$_SESSION["coursedate"]."' ";;
$result=mysqli_query($objCon,$sqlStart);

}

}
  header("Location: {$_SERVER['HTTP_REFERER']}");
  mysqli_close($objCon);

?>