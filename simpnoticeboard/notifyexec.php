<?php


session_start();

include('config.php');

$txt=$_POST["message"];

$strsql="INSERT INTO noticemsg (Teacher_ID,message) VALUES ('"    .    $_SESSION['ID']   .     "','"  . $txt   .    "')";
$result=mysqli_query($objCon,$strsql);
echo "Upload success";
?>