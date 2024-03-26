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




// RWD/////

let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}


// ----------------------------------------------------

// 定義一個異步函數來獲取權杖
async function getToken() {
    try {
      const response = await fetch('https://api.instagram.com/oauth/access_token', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          client_id: '432386265975735',
          client_secret: '4fa70463fb1aa2c2b5245e1f2056dde8',
          grant_type: 'authorization_code',
          redirect_uri: 'https://maegiw.github.io/thd102_git/',
          code: 'AQDQSjdTSWcEsfNaCJ5ZQzKm9zpVdMfIH93_dctASyXA7A0yY3ohw82-5c1u_JRjXGJZzCVwgBR2E1SYbcMcs-BHj2Ex6z1Is6YpglqTW1zk6WRzyi6da-yOZ9gM-KY3lA2HP30rfs_Y9i7uWsQ3toBBhaF9bEcuqojF_hw_x5EMprdYiKeymL3h-frxtnEt7s4SW_Pur7j3P74OfnbHZvq7blqtKY87rrSslzHj3QC6Xw'
        })
      });

    //   https://maegiw.github.io/thd102_git/?code=AQDQSjdTSWcEsfNaCJ5ZQzKm9zpVdMfIH93_dctASyXA7A0yY3ohw82-5c1u_JRjXGJZzCVwgBR2E1SYbcMcs-BHj2Ex6z1Is6YpglqTW1zk6WRzyi6da-yOZ9gM-KY3lA2HP30rfs_Y9i7uWsQ3toBBhaF9bEcuqojF_hw_x5EMprdYiKeymL3h-frxtnEt7s4SW_Pur7j3P74OfnbHZvq7blqtKY87rrSslzHj3QC6Xw#_
  
      if (!response.ok) {
        throw new Error('獲取權杖失敗');
      }
  
      const data = await response.json();
      return data.access_token; // 返回獲取的權杖
    } catch (error) {
      console.error('發生錯誤：', error);
      throw error;
    }
  }
  
  // 當按鈕被點擊時觸發獲取權杖操作
  document.getElementById('btnTrn').addEventListener('click', async () => {
    try {
      const token = await getToken();
      console.log('成功獲取權杖:', token);
      // 在此處可以使用獲取到的權杖來執行其他操作，比如通過 Meta API 獲取數據
    } catch (error) {
      console.error('獲取權杖失敗:', error);
    }
  });