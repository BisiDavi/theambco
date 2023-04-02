const whatsappBtn = document.getElementById("whatsappBtn");
const whatsappWidget = document.getElementById("whatsappWidget");

whatsappBtn.addEventListener("click", () => {
  if (!whatsappWidget.classList.contains("active")) {
    whatsappWidget.classList.add("active");
  } else {
    whatsappWidget.classList.remove("active");
  }
});
