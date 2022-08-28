const toggler = document.querySelector(".toggler")
const navLinks = document.querySelector(".navlinks")


function navToggle() {
    if (navLinks.style.display === "block") {
      navLinks.style.display = "none";
    } else {
      navLinks.style.display = "block";
    }
    console.log(navLinks);
  }
  
  toggler.addEventListener('click',navToggle)