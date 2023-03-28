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

function animate(obj, initVal, lastVal, duration) {
  let startTime = null;

  //get the current timestamp and assign it to the currentTime variable
  let currentTime = Date.now();

  //pass the current timestamp to the step function
  const step = (currentTime) => {
    //if the start time is null, assign the current time to startTime
    if (!startTime) {
      startTime = currentTime;
    }

    //calculate the value to be used in calculating the number to be displayed
    const progress = Math.min((currentTime - startTime) / duration, 1);

    //calculate what to be displayed using the value gotten above
    obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

    //checking to make sure the counter does not exceed the last value (lastVal)
    if (progress < 1) {
      window.requestAnimationFrame(step);
    } else {
      window.cancelAnimationFrame(window.requestAnimationFrame(step));
    }
  };
  //start animating
  window.requestAnimationFrame(step);
}
let text1 = document.getElementById("statsCount1");
let text2 = document.getElementById("statsCount2");
let text3 = document.getElementById("statsCount3");
let text4 = document.getElementById("statsCount4");

const stat1 = Number(text1.textContent);
const stat2 = Number(text2.textContent);
const stat3 = Number(text3.textContent);
const stat4 = Number(text4.textContent);

const load = () => {
  animate(text1, 0, stat1, 7000);
  animate(text2, 0, stat2, 7000);
  animate(text3, 0, stat3, 7000);
  animate(text4, 0, stat4, 7000);
};
