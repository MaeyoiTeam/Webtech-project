
<?php
	session_start();
        include("config.php");

if(isset($_SESSION['ID'])){
                $strSQL = "SELECT * FROM member WHERE ID = '".$_SESSION['ID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
}

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
            <br>
            <h1>Header</h1>
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
                <div id=asidemenu>
                <?php include 'php/menuright.php';?>
                </div>
           
            </aside>

            
            
        </div>
        
        
        <footer>
            
                <h1>Footer</h1>
            </footer>

        <script type="text/javascript" src="js/mouse.js">
        
     
        </script>
    </body>    

</html>

