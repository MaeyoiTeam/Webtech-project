<?php
    echo "<h3> Time In Class</h3>";

if(isset($_SESSION["Status"])){
if(isset($_SESSION["coursedate"])){
$sql="SELECT current_start,active FROM coursedate WHERE ID='".$_SESSION['coursedate']."'";
$result=mysqli_query($objCon,$sql);
$row=mysqli_fetch_row($result);
  mysqli_free_result($result);
}



 if($_SESSION['Status'] == "Teacher"){ 
            echo    "<form id = 'start' action='php/start_time.php' method='post'>";}
            echo    "<h1 class='txttime'><div id='txt'>    </div> </h1>";
if(isset($_SESSION["coursedate"])){
 if($_SESSION['Status'] == "Teacher"){ 
            echo    "<button id='control_up' value='Insert' onclick='getValue('txt','startspace','start');'>START</button>";
            echo    "</form>";

            echo    "<form id = 'record' action='php/record_time.php' method='post'>";}
        echo "<h3>Course:";
    if(isset($_SESSION["coursedate"])){ echo $_SESSION['coursedate'];

            echo    "</h3><h1 class='txttime' id='uptxt'><div id='timer_up' ></div></h1>";}
if($_SESSION['Status'] == "Teacher"){
            echo    "<input id='testtt' name='record_time'style='display:none'>";

            echo    "<button id='reset'  value='Insert' onclick='getValue('timer_up','testt','record');'>Finish</button>";
            echo    "</form>";

            echo    "<button  type='button' onclick='breaktime()'>Break Time</button><br>";
  }    
    
    
            echo    "<div id='breakbar' style='display:none'><h1 class='txttime' ><div id ='timer_down' >00:00:10</div></h1>";
   if($_SESSION['Status'] == "Teacher"){     
            echo    "<button onclick='changeState_down();' id='control_down'>START</button>";
   }
            echo    "</div>";
}
}
?>

<script type="text/javascript">
active = '<?php echo $row[1];?>';
if(active =="on"||active=="wait"){
setInterval(function()
{

var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","php/time.php",false);
    xmlhttp.send(null);
    document.getElementById("timer_up").innerHTML=xmlhttp.responseText;

},1000);}
</script>