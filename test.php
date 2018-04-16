<?php
session_start();

?>

<div id="timer_up"></div>

<script type="text/javascript">
setInterval(function()
{

var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","php/time.php",false);
    xmlhttp.send(null);
    document.getElementById("timer_up").innerHTML=xmlhttp.responseText;

},1000);

</script>