<!DOCTYPE html>
<html>
<head>
    
    
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);

    var time =  h + ":" + m;
    document.getElementById('txt').innerHTML =time  + ":" + s;
    var t = setTimeout(startTime, 500);
    return time;
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

    function showTime(){
        var time = startTime();
        return time;
    }
    
    function countTime(){
    var h = 0;
    var m = 0;
    var s = 0;
    m = checkTime(m);
    s = checkTime(s);
    var time =  h + ":" + m;
    document.getElementById('count').innerHTML =time  + ":" + s;
    var t = setTimeout(startTime, 500);
        
        
        
        
    }

</script>
    
    <style>

    h1{font-size:34px;
        margin-left: 15px;
        }
        button{
            text-align: center;
            width: 135px;
            height: 30px;
        }
        #count{
            color:darkred;
            
        }
    </style>
    
    
</head>

<body  onload="startTime()">

    <h1><div id="txt">    </div></h1>
    <button type="button" onclick="alert('Class Start at :'+showTime())">Start</button><br>
    <button  type="button" onclick="countTime(),onOffbar()">Break Time</button><br><div><h1 id="count"></h1></div>
    <button type="button" onclick="alert('Class Finish at:'+showTime())">Finish</button>
    <br>

    
    <script>
        function onOffbar() {
    var x = document.getElementById("count");
    if (x.style.display !== "none") {
        x.style.display = "none";
       
    } else {
        x.style.display = "block";
    }
}
    </script>

</body>
</html>
