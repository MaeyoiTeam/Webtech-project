<?php

    include("config.php");
$strSQL = "UPDATE member SET Active = '0' WHERE ID = '".$_SESSION["ID"]."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
        mysqli_close($objCon);

	session_destroy();
	header("location:login.php");
?>
