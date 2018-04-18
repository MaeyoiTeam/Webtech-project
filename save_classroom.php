<?php


	include("config.php");
	$subject=$_POST['subject'];
	$date=$_POST['date'];
	$sec=$_POST['sec'];




    $class ="SELECT coursedate.ID FROM coursedate WHERE coursedate.course_ID = '".$subject."' AND coursedate.sec = '".$sec."' AND coursedate.date_date = '".$date."' ";
    $result=mysqli_query($objCon,$class);
    $row=mysqli_fetch_row($result);
    if(isset($row[0])){

    $sqlWait = "UPDATE coursedate SET active = 'wait' WHERE ID = '".$row[0]."' ";;
    $result=mysqli_query($objCon,$sqlWait);


    $sql="SELECT studentcourse.student_ID FROM studentcourse WHERE studentcourse.course_ID='".$subject."' AND studentcourse.sec= '".$sec."' AND studentcourse.date_date= '".$date."' ";

    if ($result=mysqli_query($objCon,$sql)){
        $num1=0;
    while ($row1=mysqli_fetch_row($result))
    {
        $num1++;
    $strSQL2 = "INSERT INTO room ( corusedate_ID, num1,student_ID) VALUES ( '".$row[0]."', '".$num1."','".$row1[0]."')";
		$objQuery2 = mysqli_query($objCon,$strSQL2);
    }
    mysqli_free_result($result);
    }   

        $_SESSION['num1']=$num1;
        $_SESSION['coursedate']=$row[0];
		 echo ("<script LANGUAGE='JavaScript'>window.alert('Create Class Success');window.location.href='teacher_classroom2.php';</script>)");
    }
    else{
        echo ("<script LANGUAGE='JavaScript'>window.alert('404 Not found');window.location.href='teacher_classroom.php';</script>");
}

	mysqli_close($objCon);
?>
