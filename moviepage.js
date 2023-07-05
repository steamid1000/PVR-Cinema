//#region 
var Bt1=document.getElementById('sp1') ;
var Bt2=document.getElementById('sp2') ;
var Bt3=document.getElementById('sp3') ;
//#endregion

//#region 
//#endregion

//#region 
//#endregion
document.cookie="moviename="+"kerala story";

Bt1.addEventListener('click', (e) => {
  
    var value=0;
    document.cookie="table=" + value;
    
});


Bt2.addEventListener('click', (e) => {
  
    var value=1;
    document.cookie="table=" + value;
    // document.cookie="moviename="+'kerala story';
});


Bt3.addEventListener('click', (e) => {
  
    var value=2;
    document.cookie="table=" + value;
    // document.cookie="moviename="+'kerala story';
});





