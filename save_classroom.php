<?php
session_start();

	include("config.php");
	$num1=$_POST['num1'];
	$subject=$_POST['subject'];
	$date=$_POST['date'];
	$sec=$_POST['sec'];

	if(trim($num1) == ""){
		echo "Please input Number of students!";
		exit();	
	}


    $class ="SELECT coursedate.ID FROM coursedate WHERE coursedate.course_ID = '".$subject."' AND coursedate.sec = '".$sec."' AND coursedate.date_date = '".$date."' ";
    $result=mysqli_query($objCon,$class);
    $row=mysqli_fetch_row($result);
    

    $sqlWait = "UPDATE coursedate SET active = 'wait' WHERE ID = '".$row[0]."' ";;
    $result=mysqli_query($objCon,$sqlWait);






	for($i=1;$i<=$num1;$i++){		
	$strSQL2 = "INSERT INTO room ( corusedate_ID, num1) VALUES ( '".$row[0]."', '".$i."'";
		$objQuery2 = mysqli_query($objCon,$strSQL2);
    } 
		 echo ("<script LANGUAGE='JavaScript'>window.alert('Number of Student Complete!".$num1.$subject.$date.$sec."');window.location.href='teacher_classroom2.php';</script>");
        if(row[0]!=''&&num1!=''){
		 $_SESSION["num1"]=$num1;
         $_SESSION["coursedate"]=$row[0];
        }

	mysqli_close($objCon);
?>
