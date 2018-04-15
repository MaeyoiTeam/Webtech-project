<?php
session_start();
include("../config.php");

$record=$_POST['record_time'];

if(isset($_SESSION['coursedate'])){
$strSQL = "UPDATE coursedate SET duration = '".$record."' WHERE ID = '".$_SESSION["coursedate"]."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
}
header("location:../index.php");
  mysqli_close($objCon);
   
?>