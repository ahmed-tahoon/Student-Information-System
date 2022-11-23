
function eye(){
    var eye1=document.querySelector(".eye");
    var eye2=document.querySelector(".eye2");
    eye1.style.display="none";
    eye2.style.display="block";
    var pass=document.querySelector("#pass");
    pass.type="text";

}

function eye2(){
    var eye1=document.querySelector(".eye");
    var eye2=document.querySelector(".eye2");
    eye1.style.display="block";
    eye2.style.display="none";
    var pass=document.querySelector("#pass");
    pass.type="password";

}