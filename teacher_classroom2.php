
<?php
	session_start();
        include("config.php");
if(isset($_SESSION['ID'])){
		

	if($_SESSION['Status'] != "Teacher")
	{
		echo "This page for Teacher only!";
		exit();
	}
    if(!isset($_SESSION["num1"])&&!isset($_SESSION["coursedate"])){
        header("location:teacher_classroom.php");
}
}
else{
	header("location:index.php");
	}


$sql="SELECT room.student_ID 
FROM room
WHERE room.corusedate_ID='".$_SESSION["coursedate"]."'";
$ID = array();

$x=1;
if ($result=mysqli_query($objCon,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      $ID[$x]=$row[0];
      $x++;
    }
  // Free result set
  mysqli_free_result($result);
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
    <style>       
    td{border-style: solid;
    border-width: 5px;
    align-content: center;
        border-radius: 20px;
     font-size: 25;
	backgroundColor : #FFFFFF;    
        }
    
    
    </style>
<script>
function clickme(obj){
var x=document.getElementById(obj);
if(x.style.backgroundColor=='rgb(0, 255, 0)'){
x.style.backgroundColor = '#FF8000';
}else if(x.style.backgroundColor=='rgb(255, 128, 0)'){
x.style.backgroundColor = '#FF0000';
}else if(x.style.backgroundColor=='rgb(255, 0, 0)'){
x.style.backgroundColor = '#FFFFFF';
}else {
x.style.backgroundColor = '#00FF00';
}
}

</script>
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
<?php
$temp=1;
$x=$_SESSION["num1"];


echo  "<table cellspacing=25 cellpadding=25>";
    for($j=0;$j<$x/5;$j++){
        echo "<tr class='chair'>";

            for($i=0;$i<5;$i++){
        
        echo "<td id='tes".$temp."' onclick='clickme(id)'>".$temp."<br>";
                if(isset($ID[$temp-1])){
                    echo $ID[$temp-1];
}
                echo "</td>";
                $temp++;
                if($temp==$x+1)
                    break;
                            }
        echo "</tr>";
    }
echo  "</table>";
?>

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
