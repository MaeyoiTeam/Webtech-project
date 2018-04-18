
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
                      
                  Welcome to User Page! <br>
   <table border="1" style="width: 350px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;ID</td>
        <td width="220"><?php echo '&nbsp;',$objResult["ID"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?php echo '&nbsp;',$objResult["Fname"]." ".$objResult["Lname"];?></td>
      </tr>
         </tbody>
     



  </table>
                      
                      <table border="1" style="width: 500px">
    <tbody>
        <tr>
        <td> &nbsp;Course Name</td>
        <td> &nbsp;Student ID </td>
            <td> &nbsp;Sec</td>
            <td> &nbsp;Date</td>
      </tr>
        <br>
        
<?php 

$sql="SELECT course.course_name,studentcourse.student_ID,studentcourse.sec,studentcourse.date_date FROM studentcourse,course WHERE studentcourse.student_ID='".$_SESSION['ID']."' AND studentcourse.course_ID= course.ID ORDER BY studentcourse.date_date";

if ($result=mysqli_query($objCon,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
      echo "<tr>";
      echo "<td>".$row[0]."</td>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";
      echo "<td>".$row[3]."</td>";
      echo "</tr>";
    }
}
mysqli_free_result($result);
?>
        
        
       

	 
    </tbody>
  </table>
  <br>
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
