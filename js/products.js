//login1
document.getElementById("loginbutton1").addEventListener("click", function(){
   document.querySelector(".poppup").style.display = "flex";
})
//login2
document.getElementById("loginbutton2").addEventListener("click", function(){
   document.querySelector(".poppup").style.display = "flex";
})
document.querySelector(".close-btn").addEventListener("click", function(){
   document.querySelector(".poppup").style.display = "none";
})

// RWD/////

let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}
