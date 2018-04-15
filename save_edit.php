<?php
	session_start();
	include("config.php");
	$strSQL = "SELECT * FROM studentt WHERE ID = '".$_SESSION['ID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
		$strSQL = "UPDATE studentt SET
				Fname = '".$_POST["txtFname"]."',
				Lname = '".$_POST["txtLname"]."',
				Faculty = '".$_POST["txtFaculty"]."',
				Major = '".$_POST["txtMajor"]."',
				Birthdate = '".$_POST["txtBirthdate"]."',
				Gender = '".$_POST["txtGender"]."',
				Phone = '".$_POST["txtPhone"]."',
				Email = '".$_POST["txtEmail"]."'
				WHERE ID = '".$_SESSION['ID']."' ";
		$objQuery = mysqli_query($objCon,$strSQL);
		
		echo "Edit Completed!<br>";	
		echo "<br> Go to <a href='student_page.php'>Student page</a>";
	}	


	mysqli_close($objCon);
?>
