
<?php
	session_start();
        include("config.php");

$strSQL = "SELECT * FROM member,studentt WHERE ID = '".$_SESSION['ID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);


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
                 <form name="form1" method="post" action="check_login.php">
  Login<br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td> &nbsp;Username</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Login">
</form>
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
                $button2 = "register";
                $link1 = "logout.php";
                $link2 = "register.php";
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

