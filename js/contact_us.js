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

// RWD/////

let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navbar.classList.toggle("open");
};

/*=============== EMAIL JS ===============*/
const contactForm = document.getElementById("contact-form"),
  contactMessage = document.getElementById("contact-message");

const sendEmail = (e) => {
  e.preventDefault();

  // serviceID - templateID - #form - publicKey
  emailjs
    .sendForm(
      "service_ztaq4tq",
      "template_o6sodp6",
      "#contact-form",
      "oKMdzUtRX5sU-MxRU"
    )
    .then(
      () => {
        // Show sent message
        contactMessage.textContent = "Message sent successfully ✅";

        // Remove message after five seconds
        setTimeout(() => {
          contactMessage.textContent = "";
        }, 5000);

        // Clear input fields
        contactForm.reset();
      },
      () => {
        // Show error message
        contactMessage.textContent = "Something went wrong ❌";
      }
    );
};

contactForm.addEventListener("submit", sendEmail);
