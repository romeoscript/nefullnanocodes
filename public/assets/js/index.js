var count = document.getElementById("counter");
let count2 = setInterval(update);
let count3 = setInterval(update2);
let counts = setInterval(updated);
let upto = 0;
function updated() {
  count.innerHTML = ++upto;
  if (upto === 500) {
    clearInterval(counts);
  }
}

let option = 10;
function update() {
  var counted = document.getElementById("counter2");
  counted.innerHTML = ++option;
  if (option === 1000) {
    clearInterval(count2);
  }
}
let option1 = 10;
function update2() {
  var counted = document.getElementById("counter3");
  counted.innerHTML = ++option1;
  if (option1 === 1000) {
    clearInterval(count3);
  }
}
count.addEventListener("scroll", updated);
// const navSlide = ()=>{
//     const burger = document.querySelector(".burger")
//     const nav =d
// }

// the navigation bar
const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    const enable = document.querySelector('.enable')
    const showCase = document.getElementById('showcase')
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
    showCase.onmouseover = ()=>{
      enable.classList.add('displayed')
    }
    showCase.onmouseleave = ()=>{
      enable.classList.remove('displayed')
    }