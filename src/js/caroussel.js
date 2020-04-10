const arrowRightHistory = document.querySelector(
  ".videosContainer--history .videosContainer__arrow--right"
);
const arrowLeftHistory = document.querySelector(
  ".videosContainer--history .videosContainer__arrow"
);
const containerHistory = document.querySelector(
  ".videosContainer--history .videosContainer__elements"
);
let position = 0;

arrowRightHistory.addEventListener("click", function () {
  position -= 200;
  containerHistory.style.transform = `translateX(${position}px)`;
});

arrowLeftHistory.addEventListener("click", function () {
  position -= -200;
  containerHistory.style.transform = `translateX(${position}px)`;
});
