<?php
include("../config.php");

$record=$_POST['record_time'];

$strSQL = "UPDATE coursedate SET duration = '".$record."' WHERE ID = '180001' ";
        $objQuery = mysqli_query($objCon,$strSQL);

header("location:../index.php");
  mysqli_close($objCon);
   
?>