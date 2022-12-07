function hideAndShow() {
    var hide = document.getElementById("pwd");
    if (hide.type === "password") {
        hide.type = "text";
    }else{
        hide.type = "password";
    }
   }

//    hambgr menu
const hamburger = document.querySelector(".hamburger_menu input");
const nav = document.querySelector(".menu");

hamburger.addEventListener('click', function() {
   nav.classList.toggle('showMenu'); 
});

