const $controller = document.querySelector(".controller");
const $player = document.querySelector(".player");
const $leave = document.querySelector(".player__leave");
let timeout;

document.addEventListener("mousemove", () => {
  $controller.classList.add("controller--visible");
  $player.classList.add("visible");
  $leave.classList.add("visible");
  clearTimeout(timeout);
  timeout = setTimeout(() => {
    $controller.classList.remove("controller--visible");
    $player.classList.remove("visible");
    $leave.classList.remove("visible");
  }, 3000);
});
