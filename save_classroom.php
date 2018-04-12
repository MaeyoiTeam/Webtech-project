<?php
	include("config.php");
	$num1=$_POST['num1'];
	if(trim($num1) == "")
	{
		echo "Please input Number of students!";
		exit();	
	}
			
	$strSQL2 = "INSERT INTO room (num1) VALUES ('".$num1."')";
		$objQuery2 = mysqli_query($objCon,$strSQL2);
		
		 echo ("<script LANGUAGE='JavaScript'>window.alert('Number of Student Complete!".$num1."');window.location.href='teacher_classroom2.php';</script>");
		
	

	mysqli_close($objCon);
?>
