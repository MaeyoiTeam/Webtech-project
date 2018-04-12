<?php
	include("config.php");
	
	if(trim($_POST["num1"]) == "")
	{
		echo "Please input Number of students!";
		exit();	
	}
			
	$strSQL2 = "INSERT INTO room ('ID','num1') VALUES (null,'30')";
		$objQuery2 = mysqli_query($objCon,$strSQL2);
		
		 echo ("<script LANGUAGE='JavaScript'>window.alert('Number of Student Complete!');window.location.href='teacher_classroom2.php';</script>");
		
	

	mysqli_close($objCon);
?>
