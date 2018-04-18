<?php
session_start();

	include("config.php");
	$subject=$_POST['subject'];
	$date=$_POST['date'];
	$sec=$_POST['sec'];
    $date2=$_POST['date2'];
	$sec2=$_POST['sec2'];

    $class ="SELECT coursedate.ID FROM coursedate WHERE coursedate.course_ID = '".$subject."' AND coursedate.sec = '".$sec."' AND coursedate.date_date = '".$date."' ";
    $result=mysqli_query($objCon,$class);
    $row=mysqli_fetch_row($result);

    if($row[0]==''){
     echo ("<script LANGUAGE='JavaScript'>window.alert('not found');window.location.href='student_course.php';</script>");
}
    else{


    $sqlWait = "UPDATE studentcourse SET studentcourse.sec = '".$sec2."', studentcourse.date_date = '".$date2."' WHERE  studentcourse.course_ID = '".$subject."'  AND studentcourse.sec='".$sec."'  AND studentcourse.date_date = '".$date."' AND studentcourse.student_ID='".$_SESSION['ID']."' ";
    $result=mysqli_query($objCon,$sqlWait);
    


     echo ("<script LANGUAGE='JavaScript'>window.alert('Swap compelete');window.location.href='student_course.php';</script>");
	
    }
mysqli_close($objCon);
?>
