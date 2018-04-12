<?php

  if(isset($_SESSION['ID'])){
if ($_SESSION['Status']=="Teacher"){ $link2="teacher_classroom.php";}
else{ $link2="student_classroom.php";}
}

echo "<ul>";
    echo "<li><a href='index.php'><span>Index</span></a></li>";
    echo "<li><a href='calendar.php'><span>Canlendar</span></a></li>";
    echo "<li><a href=".$link2."><span>Classroom</span></a></li>";
  echo "</ul>";

?>