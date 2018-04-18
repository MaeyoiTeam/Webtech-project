
<?php
	session_start();
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
                  <div class="content">
                      
                  Welcome to Student Swap Class! <br>

                               <form name="num" method="post" action="save_swap.php">
                     Subject :<select name='subject'>
<?php
                     $subject = "SELECT course.ID,course.course_name FROM course";
                     if($result=mysqli_query($objCon,$subject)){
  // Fetch one and one row
  while ($row1=mysqli_fetch_row($result))
    {
      echo "<option value='".$row1[0]."'> ".$row1[1]."</option>";
    }
  // Free result set
  mysqli_free_result($result);
}
?>
                     </select>
                     Date :<select name='date'><?php $date = "SELECT datedate.ID FROM datedate  ";
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
                                   <p>Swap Class to..</p>
Date :<select name='date2'><?php $date2 = "SELECT datedate.ID FROM datedate  ";
                     if($result=mysqli_query($objCon,$date2)){
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
                    Sec :<select name='sec2'>
                     <?php
                    $sec2 = "SELECT sec.ID FROM sec ";
                     if($result=mysqli_query($objCon,$sec2)){
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

        <input type="submit" name="Submit" value="Save">




</form>


  <a href="edit_profile.php">Edit</a><br>
  <br>
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
