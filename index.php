
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
                 <h1>article</h1>
                 
                 <h1 id="test" onmouseout="onOut(id)" onmouseover="onOver(id)">Testttt</h1>
                 </div>
            </article>
            
            
            <aside >

                <?php
                
                
                if(isset($_SESSION['ID'])){
               echo "<h1>User:".$objResult["Username"]."</h1>"; 
                    
                $button1 = "Logout";
                $button2 = "Edit Profile";
                $link1 = "logout.php";
                $link2 = "edit_profile.php";
                }
                else{
                    
                $button1 = "Login";
                $button2 = "register";
                $link1 = "login.php";
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

        <script type="text/javascript" src="js/mouse.js">  </script>
    </body>    

</html>

<?php
	mysqli_close($objCon);
?>
