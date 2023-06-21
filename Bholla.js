
var Bt4=document.getElementById('bh1') ;
var Bt5=document.getElementById('bh2') ;
var Bt6=document.getElementById('bh3') ;


document.cookie="moviename="+'Bholla';

Bt4.addEventListener('click',(e)=> {
    var value=3;
    document.cookie="table="+value;

});

Bt5.addEventListener('click',(e)=> {
    var value=4;
    document.cookie="table="+value;
});

Bt6.addEventListener('click',(e)=>{
    var value=5;
    document.cookie="table="+value;
});
