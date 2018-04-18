
<?php
	
        include("config.php");
if(isset($_SESSION['ID'])){
		

	if($_SESSION['Status'] != "Teacher")
	{
		echo "This page for Teacher only!";
		exit();
	}
}
else{
	header("location:index.php");
	}?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Demo Webtech Project</title>

        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
    <style>       
    td{border-style: solid;
    border-width: 5px;
    align-content: center;
        border-radius: 20px;
     font-size: 25;    
        }
    
    
    </style>
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
            <!--<?php include'php/timeInClass.php';?>
//-->
            </div>
            
           
             <article >

                 <div class="content" >


                     <form name="num" method="post" action="save_classroom.php">
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

                     Date :<select name='date'>
                         <?php $date = "SELECT datedate.ID FROM datedate ";
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


        <input type="submit" name="Submit" value="Save">




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
