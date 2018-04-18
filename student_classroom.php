
<?php

        include("config.php");
if(isset($_SESSION['ID'])){
		

	if($_SESSION['Status'] != "Student")
	{
		echo "This page for Student only!";
		exit();
	}
}
else{
	header("location:index.php");
	}
	

	$strSQL = "SELECT * FROM studentt WHERE ID = '".$_SESSION['ID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Demo Webtech Project</title>

        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
    </head>
    
    <body onload="startTime()">
        
        <nav>
            <div id="tabs">
                <?php include 'php/menutop.php';?>
            </div>
            </nav>
        
        <header class="header">
            <?php include 'php/head.php';?>
        </header>
         
        <div id="container">
            
            
            <div class="closeFloating" >
             <a onclick="onOffbar()"><button id="textCloseFloating">Close</button></a>
            </div>
            
            <div id="floatingMenu">
             <?php include'php/timeInClass.php';?>
            </div>
            
           
             <article >
<div class="content" >
<?php
    $class ="SELECT course.course_name FROM coursedate,room,course WHERE coursedate.course_ID=course.ID AND coursedate.ID=room.corusedate_ID AND coursedate.active != 'off' AND room.student_ID='".$_SESSION['ID']."'";
    if($result=mysqli_query($objCon,$class)){
  // Fetch one and one row
if($row[0]==''){
        echo "you still learning ..";
  while ($row=mysqli_fetch_row($result))
    {
      echo $row[0];

    }

  // Free result set
  mysqli_free_result($result);
}
    }

?>

<form name="join" method="post" action="save_join.php">
                     Subject :<select name='subject'>
<?php
                     $subject = "SELECT course.ID,course.course_name FROM course";
                     if($result=mysqli_query($objCon,$subject)){
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value='".$row[0]."'> ".$row[1]."</option>";
    }
  // Free result set
  mysqli_free_result($result);
}
?>
                     </select>
                     Date :<select name='date'><?php $date = "SELECT datedate.ID FROM datedate ";
                     if($result=mysqli_query($objCon,$date)){
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option  value='".$row[0]."'> ".$row[0]."</option>";
    }
  // Free result set
  mysqli_free_result($result);
}
                     
                     ?>
                     </select>
                    Sec :<select name='sec'>
                     <?php
                    $sec = "SELECT sec.ID FROM sec ";
                     if($result=mysqli_query($objCon,$sec)){
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value='".$row[0]."'> ".$row[0]."</option>";
    }
  // Free result set
  mysqli_free_result($result);
}
                     
                     ?>
                     </select>
                     <br>
 <input type="submit" name="submit" value="join">




</form>


                 </div>
</article>

            
            
            <aside >
                <div id=asidemenu>
                <?php include 'php/menuright.php';?>
                    
                </div>
           
            </aside>
       
        </div>
        
        <footer>
            
                <h1>Footer</h1>
            </footer>

        
    </body>    

</html>

<?php
	mysqli_close($objCon);
?>
