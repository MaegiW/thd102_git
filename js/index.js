//login
document.getElementById("loginbutton").addEventListener("click", function(){
    document.querySelector(".poppup").style.display = "flex";
})
document.querySelector(".close-btn").addEventListener("click", function(){
    document.querySelector(".poppup").style.display = "none";
})


//熱門swiper

let carousel_el = document.querySelector(".carousel");
img_el = carousel_el.querySelectorAll('img')[0];
let arrow = document.querySelectorAll(".wrapper i");


let isDragStart = false, prevPageX, prevScrollLeft;
let firstImgWidth = img_el.clientWidth + 10;

arrow.forEach(icon => {
    icon.addEventListener("click", ()=>{
        // console.log(icon);
        if(icon.id == "left"){
            carousel_el.scrollLeft -= firstImgWidth;
        }else {
            carousel_el.scrollLeft += firstImgWidth;
        }
    });
});

let dragStart = (e) =>{
    //按下事件
    isDragStart = true;
    prevPageX = e.pageX;
    prevScrollLeft = carousel_el.scrollLeft;
}

let dragging = (e) => {
    ///向左滾動圖像輪播
     // console.log(e.pageX);
     if(!isDragStart) return;
     e.preventDefault();
     let positionDiff = e.pageX - prevPageX;
    carousel_el.scrollLeft = prevScrollLeft - positionDiff;
}

let dragStop = () => {
    isDragStart = false;
}
carousel_el.addEventListener("mousedown", dragStart);
carousel_el.addEventListener("mousemove", dragging);
carousel_el.addEventListener("mouseup", dragStop);





