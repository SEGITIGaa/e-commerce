const hamburger = document.querySelector(".hamburger_menu input");
const nav = document.querySelector(".menu");

hamburger.addEventListener('click', function() {
   nav.classList.toggle('showMenu'); 
});