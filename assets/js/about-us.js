const aboutUsContent = document.getElementById("about_us_content");
const readMoreAbout = document.getElementById("read_more_about_us");
const listItem = aboutUsContent.children[3];

let read_more = false;
readMoreAbout.addEventListener("click", () => {
  read_more = !read_more;
  listItem.classList.add("animate__animated");
  if (read_more) {
    listItem.style.display = "block";
    listItem.classList.add("animate__fadeIn");
    if (listItem.classList.contains("animate__fadeOut")) {
      listItem.classList.remove("animate__fadeOut");
    }
    readMoreAbout.textContent = "Read Less";
  } else if (!read_more) {
    listItem.style.display = "none";
    listItem.classList.remove("animate__fadeIn");
    listItem.classList.add("animate__fadeOut");
    readMoreAbout.textContent = "Read More";
  }
});