

document.querySelector(".menu_list").style.display="none";
function menu2(){
    var menu = document.querySelector(".menu_list");
    if(menu.style.display=="none"){
        document.querySelector(".menu_list").style.display = "block";
    }
    else if(menu.style.display=="block"){
        document.querySelector(".menu_list").style.display = "none";
    }

}

//  function show(){
//      var form =document.querySelector(".student-form");
//      form.style.display="block";
//      var body =document.querySelector(".body");
//      body.style.opacity="0.3";
//      let opacity =document.querySelector(".opacity");
//      opacity.style.display="block";
    
//  }
//   function exit(){
//     var form =document.querySelector(".student-form");
//     form.style.display="none";
//     var body =document.querySelector(".body");
//      body.style.opacity="1";
//      let opacity =document.querySelector(".opacity");
//      opacity.style.display="none";

//   }

  