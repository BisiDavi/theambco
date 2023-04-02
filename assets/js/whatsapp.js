const whatsappBtn = document.getElementById("whatsappBtn");
const whatsappWidget = document.getElementById("whatsappWidget");
const closeWhatsappBtn = document.getElementById("closeWhatsappBtn");

const whatsappClass = whatsappWidget.classList;

whatsappBtn.addEventListener("click", () => {
  if (whatsappClass.contains("animate__fadeOut")) {
    whatsappClass.remove("animate__fadeOut");
  }
  if (!whatsappClass.contains("active")) {
    whatsappClass.add("active", "animate__fadeIn");
  } else {
    whatsappClass.replace("animate__fadeIn", "animate__fadeOut");
    setTimeout(() => {
      whatsappClass.remove("active");
    }, 1300);
  }
});

closeWhatsappBtn.addEventListener("click", () => {
  whatsappClass.replace("animate__fadeIn", "animate__fadeOut");
  setTimeout(() => {
    whatsappClass.remove("active");
  }, 1300);
});
