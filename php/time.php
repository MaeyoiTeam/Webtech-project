<?php
session_start();
include("../config.php");
if(isset($_SESSION['coursedate'])){
date_default_timezone_set("Asia/Bangkok");
$sql="SELECT current_start,active,breaktime,current_finish FROM coursedate WHERE ID='".$_SESSION['coursedate']."'";
$result=mysqli_query($objCon,$sql);
$row=mysqli_fetch_row($result);
$current_time=date("G:i:s", time()); 
if($row[1]=='break'){
$time1=strtotime($row[2]);
$time2=strtotime($current_time);
$dif=$time1-$time2;
echo gmdate("H:i:s",$dif);
if (gmdate("H:i:s",$dif)<='00:00:00'){
$sqlStart = "UPDATE coursedate SET active = 'on' WHERE ID = '".$_SESSION["coursedate"]."' ";
$result=mysqli_query($objCon,$sqlStart);
echo ("<script LANGUAGE='JavaScript'>window.alert('Time out');</script>");
}
}

else if($row[1]=='on'){
$time1=strtotime($row[0]);
$time2=strtotime($current_time);
$time3=strtotime($row[2]);
$time4=strtotime($row[3]);
$dif=($time2-$time1)-($time3-$time4);
echo gmdate("H:i:s",$dif);
}
else{
    echo "00:00:00";
}
}
  mysqli_close($objCon);
?>