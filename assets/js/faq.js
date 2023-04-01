const faqHeadersArray = document.getElementsByClassName("faq-header");
const faqHeaders = [...faqHeadersArray];
const faqBody = document.getElementById("faqBody");

console.log("faqHeaders", faqHeaders, "faqHeadersArray", faqHeadersArray);

faqHeaders.forEach((element) => {
  element.addEventListener("click", () => {
    console.log("I was clicked");
  });
});
