
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
                
                <h1 class="txttime"><div id="txt">    </div> </h1>
  
            <button id="control_up" onclick="changeState_up();">START</button>
            <form action="php/record_time.php" method="post">  
            <h1 class="txttime" id="uptxt"><div id="timer_up" >00:00:00</div></h1>
                    <input id="testtt" name="record_time" style="display:none">
    
            <button id="reset"  value="Insert" onclick="getValue();"  >Finish</button>
            </form>
            <button  type="button" onclick="breaktime()">Break Time</button><br>
      
    
    
            <div id="breakbar" style="display:none"><h1 class="txttime" ><div id ="timer_down" >00:00:10</div></h1>
        
            <button onclick="changeState_down();" id="control_down">START</button>
        
            </div>
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

