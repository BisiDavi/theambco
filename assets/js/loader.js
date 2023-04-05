const loaderAnimation = document.getElementById("loaderAnimation");

window.addEventListener("load", () => {
  setTimeout(() => {
    loaderAnimation.classList.replace(
      "animate__fadeInLeft",
      "animate__fadeOutRight"
    );
  }, 1000);
});
