<?php
    echo "<h3> Time In Class</h3>";

if(isset($_SESSION["Status"])){
if(isset($_SESSION["coursedate"])){
$sql="SELECT current_start,active FROM coursedate WHERE ID='".$_SESSION['coursedate']."'";
$result=mysqli_query($objCon,$sql);
$row=mysqli_fetch_row($result);
  mysqli_free_result($result);
}


    echo    "<h1 class='txttime'><div id='txt'>    </div> </h1>";
 if($_SESSION['Status'] == "Teacher"){ 
            echo    "<form id = 'start' action='php/start_time.php' method='post'>";}
            
if(isset($_SESSION["coursedate"])){
 if($_SESSION['Status'] == "Teacher"){ 
            echo    "<button id='control_up' value='Insert' onclick='getValue('txt','start');'>START</button>";
            echo    "</form>";

            echo    "<form id = 'record' action='php/record_time.php' method='post'>";}
        echo "<h3>Course:";
    if(isset($_SESSION["coursedate"])){ echo $_SESSION['coursedate'];

            echo    "</h3><h1 class='txttime' id='uptxt'><div id='timer_up' ></div></h1>";}
if($_SESSION['Status'] == "Teacher"){
            echo    "<input id='testtt' name='record_time'style='display:none'>";

            echo    "<button id='reset'  value='Insert' onclick='getValue('timer_up','record');'>Finish</button>";
            echo    "</form>";
            echo    "<form id = 'breaktime' action='php/break_time.php' method='post'>";
            echo    "<button id='control_up' value='Insert' onclick='getValue('timer_down','breaktime');'>Breaktime</button>";
            echo    "<h3><input type='number' name='break_time'style=' width: 50%; text-align: right;'>minute</h3>";
            echo    "</form>";
  }    
            
             echo    "<div id='breakbar'><h1><div id ='timer_down' ></div></h1>";
            echo    "</div>";
}
}
?>

<script type="text/javascript">
active = '<?php echo $row[1];?>';
if(active =="on"){
setInterval(function()
{

var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","php/time.php",false);
    xmlhttp.send(null);
    document.getElementById("timer_up").innerHTML=xmlhttp.responseText;

},1000);}
else if(active=="break"){
setInterval(function()
{

var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","php/time.php",false);
    xmlhttp.send(null);
    document.getElementById("timer_down").innerHTML=xmlhttp.responseText;

},1000);}
</script>