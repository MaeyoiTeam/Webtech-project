
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
            
           
             <article>
                 <div class="content">
                 <h1>Calendar</h1>
                     <h2> <a> &lt; </a>4/2018<a> &gt; </a> </h2><br>
                     <table class="tbl_cld">
                     <tr class="day">
                         <th class="weekend">S</th>    
                         <th>M</th>
                         <th>T</th> 
                         <th>W</th> 
                         <th>T</th> 
                         <th>F</th> 
                         <th class="weekend">S</th> 
                     </tr>
                         
                         <tr class="date1">
                         <th class="weekend">1</th> 
                         <th>2</th>    
                         <th>3</th>
                         <th>4</th> 
                         <th>5</th> 
                         <th>6</th> 
                         <th class="weekend">7</th> 
                         
                     </tr>
                         <tr class="date2">
                         <th class="weekend">8</th> 
                         <th >9</th>    
                         <th >10</th>
                         <th >11</th> 
                         <th >12</th> 
                         <th>13</th> 
                         <th class="weekend">14</th> 
                         
                     </tr>
                         <tr class="date1">
                         <th class="weekend">15</th> 
                         <th>16</th>    
                         <th>17</th>
                         <th>18</th> 
                         <th>19</th> 
                         <th>20</th> 
                         <th class=" weekend">21</th> 
                          
                     </tr>
                         <tr class="date2">
                         <th class="weekend">22</th>
                         <th>23</th>    
                         <th>24</th>
                         <th>25</th> 
                         <th>26</th> 
                         <th>27</th> 
                         <th class="weekend">29</th> 
                         
                     </tr>
                         <tr class="date1">
                         <th class="weekend">30</th> 
                         <th></th>    
                         <th></th>
                         <th></th> 
                         <th></th> 
                         <th></th> 
                         <th class="weekend"></th> 
                         
                     </tr>
                     </table>
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
