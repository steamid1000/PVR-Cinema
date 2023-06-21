
var Bt7=document.getElementById('ks1') ;
var Bt8=document.getElementById('ks2') ;
var Bt9=document.getElementById('ks3') ;



document.cookie = "moviename=" +"Adipurush";
document.cookie="mt="+"9 PM";
Bt7.addEventListener('click',(e)=> {
    var value=6;
    var time=3;
  
    document.cookie="table="+value;
    // document.cookie="mtime="+"9 PM";
    // document.cookie="movietime="+time;
    
    
});

Bt8.addEventListener('click',(e)=> {
    var value=7;
    var time=3;
     
    document.cookie="table="+value;
    // document.cookie="mtime="+ "9 PM";
    
     
});

Bt9.addEventListener('click',(e)=>{
    var value=8;
    var time=3;
     
    document.cookie="table="+value;
    // document.cookie="movietime="+time;
   
});
