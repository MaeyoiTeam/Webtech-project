<?php
	include("config.php");
	$num1=$_POST['num1'];
	if(trim($num1) == "")
	{
		echo "Please input Number of students!";
		exit();	
	}
			
	$strSQL2 = "UPDATE room SET num1  = '".$num1."'  WHERE ID = '1'";
		$objQuery2 = mysqli_query($objCon,$strSQL2);
		
		 echo ("<script LANGUAGE='JavaScript'>window.alert('Number of Student Complete!".$num1."');window.location.href='teacher_classroom2.php';</script>");
		
	

	mysqli_close($objCon);
?>
