    var active =false;
    function start_timer(){
        if(active){
        var timer = document.getElementById("my_timer").innerHTML;
        var arr=timer.split(":");
        var hour=arr[0];
        var min=arr[1];
        var sec=arr[2];
        if(sec==59){
            if(min==59){
                hour++;
                min=0;
                
                if(hour<10)hour= "0" + hour;
            }else{
                min++;
            }
            if(min<10)min= "0" +min;
            sec=0;
        }else{
            sec++;
            if (sec<10) sec="0" +sec;
        }
        document.getElementById("my_timer").innerHTML = hour+":"+min+":"+sec;
        setTimeout(start_timer,1000);
         
    }
}
        
function changeState(){
    if(active == false){
        active = true;
        start_timer();
        console.log("Timer has been started");
        document.getElementById("control").innerHTML="PAUSE";
    }else{
        active=false;
        console.log("Timer is on pause");
        document.getElementById("control").innerHTML="START";
    }
}
function reset(){
    document.getElementById("my_timer").innerHTML = "00"+":"+"00"+":"+"00";
    console.log("Timer has been reset");
}
        
        
        

