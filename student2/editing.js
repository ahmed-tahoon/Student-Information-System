document.querySelector(".menu_list").style.display="none";
function menudrop(){
    var menu = document.querySelector(".menu_list");
    if(menu.style.display=="none"){
        document.querySelector(".menu_list").style.display = "block";
    }
    else if(menu.style.display=="block"){
        document.querySelector(".menu_list").style.display = "none";
    }

}