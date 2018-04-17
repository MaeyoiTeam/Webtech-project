<?php
session_start();
include("../config.php");
if(isset($_SESSION['coursedate'])){
$sql="SELECT current_start,active FROM coursedate WHERE ID='".$_SESSION['coursedate']."'";
$result=mysqli_query($objCon,$sql);
$row=mysqli_fetch_row($result);
date_default_timezone_set("Asia/Bangkok");
$current_time=date("G:i:s", time()); 

if($row[1]=='wait'){
echo "wait";
}
else if($row[1]=='on'){
$time1=strtotime($row[0]);
$time2=strtotime($current_time);
$dif=$time2-$time1;
echo gmdate("H:i:s",$dif);
  mysqli_close($objCon);
}
else{
    echo "00:00:00";
}
}
?>