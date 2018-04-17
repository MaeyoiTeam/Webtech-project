<?php
session_start();

	include("config.php");
	$subject=$_POST['subject'];
	$date=$_POST['date'];
	$sec=$_POST['sec'];


    $class ="SELECT coursedate.ID,coursedate.current_start FROM coursedate WHERE coursedate.course_ID = '".$subject."' AND coursedate.sec = '".$sec."' AND coursedate.date_date = '".$date."' ";
    $result=mysqli_query($objCon,$class);
    $row=mysqli_fetch_row($result);
    

  date_default_timezone_set("Asia/Bangkok");
    $current_time=date("G:i:s", time()); 
    $time1=strtotime($row[1]);
    $time2=strtotime($current_time);
    if($time2>$time1+1800){
        $active= 'miss';
}
    else if($time2>$time1+900){
        $active= 'Late';
}
    else if($time2>=$time1){
        $active= 'present';
}
    else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Not time yet');window.location.href='student_classroom.php';</script>");
        $active= 'wait';
}
    $_SESSION['coursedate']=$row[0];
   echo ("<script LANGUAGE='JavaScript'>window.alert('Swap compelete');window.location.href='student_page.php';</script>");
	mysqli_close($objCon);


?>
