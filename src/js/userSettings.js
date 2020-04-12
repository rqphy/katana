const setting = document.querySelector(".user__setting");
let width = setting.offsetWidth;
const container = document.querySelector(".user__settings");
const account = document.getElementById("account");
const sub = document.getElementById("sub");
const active = document.querySelector(".user .active");

console.log(width);

sub.addEventListener("click", () => {
  container.style.transform = `translateX(${-width}px)`;
  account.classList.remove("active");
  sub.classList.add("active");
});

account.addEventListener("click", () => {
  container.style.transform = "translateX(0px)";
  sub.classList.remove("active");
  account.classList.add("active");
});
