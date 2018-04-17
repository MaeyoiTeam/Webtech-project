<?php
session_start();
include("config.php");
$_SESSION["coursedate"]='180001';
echo $_SESSION["coursedate"];
$sqlWait = "UPDATE coursedate SET active = 'wait' WHERE ID = '".$_SESSION["coursedate"]."' ";;
$result=mysqli_query($objCon,$sqlWait);
?>
