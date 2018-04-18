<?php



        include("config.php");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
            echo ("<script LANGUAGE='JavaScript'>window.alert('Username or Password Incorrect!');window.location.href='login.php';</script>");
	}
	else
	{
        $_SESSION["ID"] = $objResult["ID"];
			$_SESSION["Status"] = $objResult["Status"];
        
			
            $_SESSION["Active"] = $objResult["Active"];
        
        
        $strSQL = "UPDATE member SET Active = '1' WHERE ID = '".$_SESSION["ID"]."' ";
        $objQuery = mysqli_query($objCon,$strSQL);

        
			session_write_close();
			
			if($objResult["Status"] == "Teacher")
			{
				header("location:teacher_page.php");
			}
			else
			{
				header("location:student_page.php");
			}
	}
	mysqli_close($objCon);
?>
				