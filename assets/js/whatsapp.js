// const whatsappBtn = document.getElementById("whatsappBtn");
const whatsappWidget = document.getElementById("whatsappWidget");

whatsappBtn.addEventListener("click", () => {
  if (!whatsappWidget.classList.contains("active")) {
    whatsappWidget.classList.add("active");
    setTimeout(() => {
      whatsappWidget.classList.add("animate");
    }, 100);
  } else {
    whatsappWidget.classList.remove("active");
    whatsappWidget.classList.remove("animate");
  }
});
