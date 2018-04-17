<?php
session_start();
include("../config.php");
$sql="SELECT current_start,breaktime,current_finish FROM coursedate WHERE ID='".$_SESSION['coursedate']."'";
$result=mysqli_query($objCon,$sql);
$row=mysqli_fetch_row($result);
  mysqli_free_result($result);

$record=$_POST['record_time'];
date_default_timezone_set("Asia/Bangkok");
$current_time=date("G:i:s", time());


$times=strtotime($row[0]);
$timef=strtotime($row[1]);
$timeb=strtotime($row[2]);
$time2=strtotime($current_time);
$record=$time2-$times-($timeb-$timef);

if(isset($_SESSION['coursedate'])){
$strSQL = "UPDATE coursedate SET current_finish = '".$current_time."',duration = '".$record."',active = 'off' WHERE ID = '".$_SESSION["coursedate"]."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
    unset($_SESSION['coursedate']);
}

header("Location: {$_SERVER['HTTP_REFERER']}");

   
?>