<?php
	include("config.php");
	
	if(trim($_POST["txtUsername"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	
	
	$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO member (ID,Username,Password,Active,Status) VALUES ('".$_POST["txtID"]."','".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["ddlStatus"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
	}	
	if($_POST["ddlStatus"]=="Student")
	{
		$strSQL = "INSERT INTO studentt (ID) VALUES ('".$_POST["txtID"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
	}
	else
	{
		$strSQL = "INSERT INTO teachert (ID) VALUES ('".$_POST["txtID"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
	}
		echo "Register Completed!<br>";		
	
		echo "<br> Go to <a href='login.php'>Login page</a>";
		
	

	mysqli_close($objCon);
?>
