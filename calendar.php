
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

