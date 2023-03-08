
var type=0;
var tir=0;
var dist1 = document.getElementById("dist1");

const element = document.getElementById("dist1");
document.addEventListener("click", distance());

function distance() {
    if(dist1){
        document.getElementById("resultat").innerHTML= "1";
    }
  
}















function type1(){
    var image = document.getElementById('type');
    type = 1;
    document.getElementById("aff").innerHTML=choix;
}
function type2(){
    var image = document.getElementById('type');
    type = 2;
    document.getElementById("aff").innerHTML=choix;
}
function type3(){
    var image = document.getElementById('type');
    type = 3;
    document.getElementById("aff").innerHTML=choix;
}
function type4(){
    var image = document.getElementById('type');
    type = 4;
    document.getElementById("aff").innerHTML=choix;
}