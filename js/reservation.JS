// 切換遊戲

let img = document.getElementById("subjectImg");
        let selectImg = document.getElementById("subjectType");
        let game = ["./img/b5.png", "./img/b1.png", "./img/b2.png","./img/b3.png","./img/b4.png","./img/b6.png"];
        
        selectImg.addEventListener("change", function(){
            // console.log("dfg");
         let selectedValue = selectImg.options[selectImg.selectedIndex].value
         switch (selectedValue) {
            case "緯育高校女子":
            img.setAttribute("src", game[0])
            break;
                 
            case "倖存者":
            img.setAttribute("src", game[1])
            break;

            case "娃娃":
            img.setAttribute("src", game[2])
            break;

            case "嚇水道":
            img.setAttribute("src", game[3])
            break;

            case "傘":
            img.setAttribute("src", game[4])
            break;

            case "三号室":
            img.setAttribute("src", game[5])
            break;
         
            default:
                break;
         }
        })
        
        
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

