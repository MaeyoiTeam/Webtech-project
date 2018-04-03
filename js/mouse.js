                function onOver(obj){
	   document.getElementById(obj).style.backgroundColor="#1f2023";
       document.getElementById(obj).style.color="Darkgray"; 
    }


    function onOut(obj){
        
	   document.getElementById(obj).style.backgroundColor="#222427";
    document.getElementById(obj).style.color= "white";
        
    }

function onOffbar() {
    var x = document.getElementById("floatingMenu");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("textCloseFloating").innerHTML="Close";
    } else {
        x.style.display = "none";
         document.innerHTML = "Hello";
        document.getElementById("textCloseFloating").innerHTML="Open";
    }
}
       