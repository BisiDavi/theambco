const faqHeadersArray = document.getElementsByClassName("faq-header");
const faqHeaders = [...faqHeadersArray];
const faqBody = document.getElementById("faqBody");

faqHeaders.forEach((element) => {
  element.addEventListener("click", () => {
    if (!element.classList.contains("active")) {
      element.classList.add("active");
    } else {
      element.classList.remove("active");
    }
    console.log("faqSlug", faqSlug);
  });
});
