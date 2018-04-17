<?php
session_start();
include("../config.php");
date_default_timezone_set("Asia/Bangkok");
$current_time=date("G:i:s", time()); 

$break=$_POST['break_time'];
$break=strtotime("+".$break." min");
$break_time=date("G:i:s", $break); 


$sql="SELECT active,breaktime,current_finish FROM coursedate WHERE ID='".$_SESSION['coursedate']."'";
$result=mysqli_query($objCon,$sql);
$row=mysqli_fetch_row($result);


if(isset($_SESSION['coursedate'])){

if($row[0]=='break'){
$sqlStart = "UPDATE coursedate SET breaktime = '".$current_time."',active = 'on' WHERE ID = '".$_SESSION["coursedate"]."' ";
$result=mysqli_query($objCon,$sqlStart);
echo ("<script LANGUAGE='JavaScript'>window.alert('Time out');window.location.href='../teacher_classroom2.php';</script>");
}
else{
$sqlStart = "UPDATE coursedate SET current_finish = '".$current_time."',breaktime = '".$break_time."',active = 'break' WHERE ID = '".$_SESSION["coursedate"]."' ";
$result=mysqli_query($objCon,$sqlStart);
echo ("<script LANGUAGE='JavaScript'>window.alert('Time out :".$break_time."');window.location.href='../teacher_classroom2.php';</script>");
}
}
  mysqli_close($objCon);

?>

