
<?php
session_start();
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
                  <div class="content">
                      <h1 id="projechh " onmouseout="onOut(id)" onmouseover="onOver(id)">HELLO project!!!</h1>
                 <h1 id="projec " onmouseout="onOut(id)" onmouseover="onOver(id)">Webtech project</h1>
                  <h1 id="test7" onmouseout="onOut(id)" onmouseover="onOver(id)">KANUTSANUN NITHIPANICH 59010164</h1>
                 
                 <h1 id="test1" onmouseout="onOut(id)" onmouseover="onOver(id)">JAKKAPAT BOONROJ 59010187</h1>
                       <h1 id="test3" onmouseout="onOut(id)" onmouseover="onOver(id)">JIRAPAT PITAKSINAKORN 59010205</h1>
                 <h1 id="test2" onmouseout="onOut(id)" onmouseover="onOver(id)">CHALERMWUT LERDWUTWARAKITTI 59010249 <h1>
                
                 
                 <h1 id="test6" onmouseout="onOut(id)" onmouseover="onOver(id)">NAPHAT PECHSRIJUN 59010386</h1>
                
                     <h1 id="test4" onmouseout="onOut(id)" onmouseover="onOver(id)">NONTAKON CHAROENCHEEWAKUL 59010679</h1>
                 <h1 id="test5" onmouseout="onOut(id)" onmouseover="onOver(id)">NANTAPONG SILSRIKUL 59010719</h1>
                     <h1 id="test" onmouseout="onOut(id)" onmouseover="onOver(id)">NITHI SEMAMUANG 59010736</h1>
                
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
