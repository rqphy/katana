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



const input = document.querySelectorAll(".user__input")
const modif = document.querySelectorAll(".user__modif")
const enter = document.querySelectorAll(".user__enter")


for (let i = 0; i < modif.length; i++) {
  modif[i].addEventListener('click',function () {
    for (let j = 0; j < modif.length; j++) {
      input[j].classList.remove("change")
      enter[j].setAttribute('readonly', 'readonly');;
    }
    input[i].classList.add("change")
    enter[i].removeAttribute('readonly');
  });
}