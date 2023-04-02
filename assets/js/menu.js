const menuButton = document.getElementById("menuButton");
const mobileMenu = document.getElementById("mobileMenu");
const mobileHeader = document.getElementById("menu-header");
const subMenu = document.querySelector(".sub-menu");

let menuState = false;

const showMenu = () => {
  subMenu.style.display = "block";
};

menuButton.addEventListener("click", () => {
  if (mobileMenu.classList.contains("active")) {
    mobileHeader.classList.replace("animate__fadeIn", "animate__fadeOut");
    mobileMenu.classList.remove("active");
    setTimeout(() => {
      subMenu.style.display = "none";
      mobileHeader.classList.remove("animate__fadeOut");
    }, 1000);
  } else {
    mobileMenu.classList.add("active");
    mobileHeader.classList.add("animate__fadeIn");
    subMenu.style.display = "block";
  }
});
