const counters = document.querySelectorAll(".count");
const speed = 10;

counters.forEach((counter) => {
  const animate = () => {
    const value = +counter.getAttribute("akhi");
    const data = +counter.innerText;

    console.log("data", data);
    console.log("value", value);

    const time = value / speed;
    if (data < value) {
      counter.innerText = Math.ceil(data + time);
      setTimeout(animate, 1000);
    } else {
      counter.innerText = value;
    }
  };

//   animate();
});
