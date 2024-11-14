//login1
document.getElementById("loginbutton1").addEventListener("click", function () {
  document.querySelector(".poppup").style.display = "flex";
});
//login2
document.getElementById("loginbutton2").addEventListener("click", function () {
  document.querySelector(".poppup").style.display = "flex";
});
document.querySelector(".close-btn").addEventListener("click", function () {
  document.querySelector(".poppup").style.display = "none";
});

//熱門swiper

let carousel_el = document.querySelector(".carousel");
img_el = carousel_el.querySelectorAll("img")[0];
let arrow = document.querySelectorAll(".wrapper i");

let isDragStart = false,
  prevPageX,
  prevScrollLeft;
let firstImgWidth = img_el.clientWidth + 10;

arrow.forEach((icon) => {
  icon.addEventListener("click", () => {
    // console.log(icon);
    if (icon.id == "left") {
      carousel_el.scrollLeft -= firstImgWidth;
    } else {
      carousel_el.scrollLeft += firstImgWidth;
    }
  });
});

let dragStart = (e) => {
  //按下事件
  isDragStart = true;
  prevPageX = e.pageX;
  prevScrollLeft = carousel_el.scrollLeft;
};

let dragging = (e) => {
  ///向左滾動圖像輪播
  // console.log(e.pageX);
  if (!isDragStart) return;
  e.preventDefault();
  let positionDiff = e.pageX - prevPageX;
  carousel_el.scrollLeft = prevScrollLeft - positionDiff;
};

let dragStop = () => {
  isDragStart = false;
};
carousel_el.addEventListener("mousedown", dragStart);
carousel_el.addEventListener("mousemove", dragging);
carousel_el.addEventListener("mouseup", dragStop);

// RWD/////

let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navbar.classList.toggle("open");
};

// ----------------------------------------------------

// 定義一個異步函數來獲取權杖

// const clientId = process.env.CLIENT_ID;
// const clientSecret = process.env.CLIENT_SECRET;
// const redirectUri = process.env.REDIRECT_URI;
// const code = process.env.CODE;

//https://cors-anywhere.herokuapp.com/0
// async function getToken() {
//     try {
//       const response = await fetch('https://api.instagram.com/oauth/access_token', {
//         method: 'POST',
//         mode: 'no-cors', //在這裡加入 'no-cors'
//         headers: {
//           'Content-Type': 'application/json'
//         },
//         body: JSON.stringify({
//           client_id: '932176255221177',//Instagram應用程式編號
//           client_secret: '4abec0d06f3471cb6cefb5ae1f0e2cc5',//Instagram應用程式密鑰
//           grant_type: 'authorization_code',
//           redirect_uri: 'https://maegiw.github.io/thd102_git/',//重新導向URI
//           code: 'AQDTekMc5cbQyO2_ia32x4TnOc8PITzJCWn5evphoqSakeMdhWfKxW0i3dPNNMv6CtX0ND07JFITquY7lZ2rhBBTv8gn4FN8ZYn8sBzQTju6iU8bOfNlIBX7vio451BZ2tDTsBPUUTo4iX1GLwTkFW41YHxfWWUvAWv8cPhHUpe51ej6rRjYjC1jlqlUh8VpxC_3AYcnHiRjKNK6xEk8GbW7fpuQzuSTcB3g9adCCk1VfA',//授權碼

//         })
//       });

//       //丟出錯誤
//       if (!response.ok) {
//         throw new Error('獲取權杖失敗');
//       }

//       const data = await response.json();
//       return data.access_token; // 返回獲取的權杖
//     } catch (error) {
//       console.error('發生錯誤：', error);
//       throw error;
//     }
//   }

//   // 當按鈕被點擊時觸發獲取權杖操作
//   document.getElementById('btnTrn').addEventListener('click', async () => {
//     try {
//       const token = await getToken();
//       console.log('成功獲取權杖:', token);
//       // 在此處可以使用獲取到的權杖來執行其他操作，比如通過 Meta API 獲取數據
//     } catch (error) {
//       console.error('獲取權杖失敗:', error);
//     }
//   });
