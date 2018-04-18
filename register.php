
<?php

        include("config.php");
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
<form name="form1" method="post" action="save_register.php">
  Register Form <br>
  <table width="400" border="1" style="width: 400px">
    <tbody>
	  <tr>
        <td width="125"> &nbsp;ID</td>
        <td width="180">
          <input name="txtID" type="text" id="txtID" size="20">
        </td>
      </tr>
      <tr>
        <td width="125"> &nbsp;Username</td>
        <td width="180">
          <input name="txtUsername" type="text" id="txtUsername" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Confirm Password</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Status</td>
        <td>
          <select name="ddlStatus" id="ddlStatus">
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
          </select>
</td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save">
</form></article>
            
            
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
