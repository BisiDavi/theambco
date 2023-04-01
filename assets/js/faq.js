const faqHeadersArray = document.getElementsByClassName("faq-header");
const faqHeaders = [...faqHeadersArray];
const faqBody = document.getElementById("faqBody");

faqHeaders.forEach((element) => {
  element.addEventListener("click", () => {
    if (!element.classList.contains("active")) {
      element.classList.add("active");
      element.classList.add("animate__fadeIn");
      element.classList.remove("updated");
    } else {
      element.classList.remove("animate__fadeIn");
      element.classList.remove("active");
      element.classList.add("updated");
    }
  });
});
