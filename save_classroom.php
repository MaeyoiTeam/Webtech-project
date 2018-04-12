<?php
	include("config.php");
	
	if(trim($_POST["num1"]) == "")
	{
		echo "Please input Number of students!";
		exit();	
	}
			
	$strSQL2 = "INSERT INTO room ('ID','num1') VALUES (null,'30')";
		$objQuery2 = mysqli_query($objCon,$strSQL2);
		
		echo "Register Completed!<br>";		
	
		echo "<br> Go to <a href='teacher_classroom2.php'>classroom</a>";
		
	

	mysqli_close($objCon);
?>
