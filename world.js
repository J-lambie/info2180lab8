window.onload= function(){
    $("lookup").onclick=Query;
    
}


              
function Query(){
    var country=document.getElementById('term').value;
    var Request1 = new XMLHttpRequest();
    Request1.open("GET","world.php?lookup="+country,false);
    Request1.send();
    
   document.getElementById('result').innerHTML=Request1.responseText;
        
   
    if (document.getElementById("all").checked===true){
        var Request2 = new XMLHttpRequest();
        Request2.open("GET","world.php?all=true",false);
        Request2.send();   
        document.getElementById('result').innerHTML=Request2.responseText;
   }
}
    

