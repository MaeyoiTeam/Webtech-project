<?php
	include("config.php");
	
	if(trim($_POST["txtUsername"]) == "")
	{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Please input username!');window.location.href='register.php';</script>");
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Please input password!');window.location.href='register.php';</script>");
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Password not match!');window.location.href='register.php';</script>");
		exit();
	}
	
	
	$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Username already exist!');window.location.href='register.php';</script>");
	}
	else
	{	
		
		$strSQL = "INSERT INTO member (ID,Username,Password,Status) VALUES ('".$_POST["txtID"]."','".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["ddlStatus"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
	}	
	if($_POST["ddlStatus"]=="Student")
	{
		$strSQL = "INSERT INTO studentt (ID) VALUES ('".$_POST["txtID"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		echo ("<script LANGUAGE='JavaScript'>window.alert('Register Completed!');window.location.href='login.php';</script>");
	}
	else
	{
		$strSQL = "INSERT INTO teachert (ID) VALUES ('".$_POST["txtID"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		echo ("<script LANGUAGE='JavaScript'>window.alert('Register Completed!');window.location.href='login.php';</script>");
	}
		

		
	

	mysqli_close($objCon);
?>
