<?php
	session_start();
        include("config.php");

	if($_SESSION['Status'] != "Teacher")
	{
		header("location:index.php");
	}	


	$strSQL = "SELECT * FROM member WHERE ID = '".$_SESSION['ID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    if($objResult["Status"]=="Teacher"){
        $strSQL2 = "SELECT * FROM teachert WHERE User_ID = '" .$objResult['ID']."' ";
	$objQuery2 = mysqli_query($objCon,$strSQL2);
	$objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
        $strSQL3 = "SELECT * FROM courset WHERE Teacher_ID = '" .$objResult2['Teacher_ID']."' ";
	$objQuery3 = mysqli_query($objCon,$strSQL3);
	$objResult3 = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Demo Maeyoi Project</title>

        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
        
        
    </head>
    <body>
        <nav>
            <div id="tabs">
  <ul>
    <li><a href="index.php"><span>Index</span></a></li>
    <li><a href="calendar.php"><span>Canlendar</span></a></li>
    <li><a href="classRoom.php"><span>Classroom</span></a></li>
  </ul>
</div>
            </nav>
        <header class="header">
            <br>
            <h1>Header</h1>
        </header>
         
        <div id="container">
            
            
            <div class="closeFloating" >
             <a onclick="onOffbar()"><button id="textCloseFloating">Close</button></a>
            </div>
            <div id="floatingMenu">
                
                <iframe id="framefloating" src="php/timeInClass.php" 
                        style="border:none;"></iframe>
            </div>
            
           
             <article >
                  <div class="content">
   Welcome to Teacher Page! <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;First Name</td>
        <td width="197"><?php echo $objResult2["First Name"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Last Name</td>
        <td><?php 
            
            echo $objResult2["Last Name"];?></td>
      </tr>
        <td> &nbsp;Course Name</td>
        <td><?php 
            
            echo $objResult3["CourseName"];?></td>
    </tbody>
  </table>
  <br>
  <a href="edit_profile.php">Edit</a><br>
  <br>
  <a href="logout.php">Logout</a>
                 </div>
            </article>
            
            
            <aside >
                
                <?php
                
                if($_SESSION['ID']==""){
                $button1 = "Login";
                $button2 = "register";
                $link1 = "login.php";
                $link2 = "register.php";
                }
                else{
                    echo "<h1>User:".$objResult["Username"]."</h1>"; 
                    
                $button1 = "Logout";
                $button2 = "Edit Profile";
                $link1 = "logout.php";
                $link2 = "edit_profile.php";
                }
                echo  "<a href=".$link1."><h1>".$button1."</h1></a>";
                 echo  "<a href=".$link2."><h1>".$button2."</h1></a>";
                ?>
               
            </aside>

            
            
        </div>
        
        
        <footer>
            
                <h1>Footer</h1>
            </footer>

        <script type="text/javascript" src="js/mouse.js">
        
     
        </script>
    </body>    

</html>
<?php
	mysqli_close($objCon);
?>


