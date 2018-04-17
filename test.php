<?php
session_start();
include("config.php");

$sql="SELECT studentcourse.student_ID FROM studentcourseWHERE studentcourse.course_ID='1236055'AND studentcourse.sec='21'AND studentcourse.date_date='2018-04-18'";

    if ($result=mysqli_query($objCon,$sql)){
        $num1='0';
    while ($row1=mysqli_fetch_row($result))
    {
        $num1++;
    $strSQL2 = "INSERT INTO room ( corusedate_ID, num1,student_ID) VALUES ( '".$row[0]."', '".$num1."','".$row1[0]."')";
		$objQuery2 = mysqli_query($objCon,$strSQL2);
    }
    mysqli_free_result($result);
    }   

?>
