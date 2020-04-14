const $volume = document.querySelector(".controller__volumeBar");

$volume.addEventListener("mouseup", () => {
  $video.volume = $volume.value / 100;
  console.log($video.volume);
});
