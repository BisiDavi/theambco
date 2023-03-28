function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function animate(obj, initVal, lastVal, duration) {
  let startTime = null;

  console.log(
    "obj, initVal, lastVal, duration",
    obj,
    initVal,
    lastVal,
    duration
  );

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

const text1 = document.getElementById("statsCount1");
const text2 = document.getElementById("statsCount2");
const text3 = document.getElementById("statsCount3");
const text4 = document.getElementById("statsCount4");
const statisticsView = document.querySelector(".statistics-view");

const stat1 = Number(text1.textContent);
const stat2 = Number(text2.textContent);
const stat3 = Number(text3.textContent);
const stat4 = Number(text4.textContent);

const load = () => {
  animate(text1, 0, stat1, 7000);
  animate(text2, 0, stat2, 7000);
  animate(text3, 0, stat3, 2000);
  animate(text4, 0, stat4, 2000);
};

document.addEventListener("scroll", function () {
  const isStatisticsCounterVisible = isInViewport(statisticsView);
  if (isStatisticsCounterVisible) {
    load();
  }
});
