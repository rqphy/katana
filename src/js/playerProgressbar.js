const $progressBar = document.querySelector(".controller__progressBar");
const $bouboule = document.querySelector(".controller__bouboule");
const $totalBar = document.querySelector(".controller__timeBar");
const $video = document.querySelector(".player__video");
const $controller = document.querySelector(".controller");
// Time

const $currentTime = document.querySelector(".controller__currentTime");
const $totalTime = document.querySelector(".controller__totalTime");

$totalTime.innerHTML = formatTime($video.duration);

$video.addEventListener("timeupdate", () => {
  const videoTime = ($video.currentTime / $video.duration) * 100;

  $progressBar.style.transform = `translateX(${videoTime - 99}%)`;
  $bouboule.style.left = `${videoTime}%`;
  // $bouboule.style.left = `calc(${videoTime}% - 9px)`;
  $currentTime.innerHTML = formatTime($video.currentTime);
});

// CurrentTime onClick

function onDrag(e) {
  const coordX = e.clientX - $totalBar.offsetLeft - $controller.offsetLeft;
  const coordP = (coordX / $totalBar.offsetWidth) * 100;
  const videoPercent = (coordP * $video.duration) / 100;
  $bouboule.style.left = `${coordP}%`;
  // $bouboule.style.left = `calc(${coordP}% - 9px)`;
  $progressBar.style.transform = `translateX(${coordP - 99}%)`;
  $video.currentTime = videoPercent;
}

let mousedown = false;

$totalBar.addEventListener("mousedown", (e) => {
  mousedown = true;
  onDrag(e);
});

document.addEventListener("mousemove", (e) => {
  if (!mousedown) return;
  onDrag(e);
});

document.addEventListener("mouseup", (e) => {
  if (!mousedown) return;
  mousedown = false;
  onDrag(e);
});

function formatTime(seconds) {
  var minutes = Math.floor(seconds / 60),
    seconds = Math.floor(seconds % 60);

  seconds = seconds >= 10 ? seconds : "0" + seconds;
  minutes = minutes >= 10 ? minutes : minutes;

  return minutes + ":" + seconds;
}
