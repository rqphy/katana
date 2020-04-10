const arrowRightHistory = document.querySelector(
  ".videosContainer--history .videosContainer__arrow--right"
);
const arrowLeftHistory = document.querySelector(
  ".videosContainer--history .videosContainer__arrow"
);
const containerHistory = document.querySelector(
  ".videosContainer--history .videosContainer__elements"
);

console.log(arrowRightHistory);

arrowRightHistory.addEventListener("click", function () {
  containerHistory.style.transform = "translateX(-150px)";
  console.log("nathan");
});

arrowLeftHistory.addEventListener("click", function () {
  containerHistory.style.transform = "translateX(150px)";
});
