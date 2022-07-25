// the navigation bar
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

//form submission for login
const displayError = document.getElementById("error");
const passError = document.getElementById("passerror");
let user = document.querySelector(".user");
let passKey = document.querySelector(".passkey");

const formElement = document.querySelector(".myform");
function sendInfo(event) {
  event.preventDefault();
  const formData = new FormData(event.target);
  const enteredUserName = formData.get("username").trim();
  const enteredPassword = formData.get("userpasskey").trim();

  if (!enteredUserName) {
    user.classList.add("errorclass")
    displayError.textContent = "please entered a valid username";
    return;
  }
  // if(enteredPassword.length < 8)
  // passKey.classList.add("errorclass")
}
// formElement.addEventListener("submit", sendInfo);

// const checkInput = () =>{
//   let check_username = (username) => {
   
//     return rx.test(username); // Checks if the username is only made of alphanumeric characters (case insentisive)
//   };
//   user.addEventListener("input",check_username)

// };
// document.querySelector(".user").addEventListener("change", checkInput);


// let check_password = (password) => {
//   let special_char = /[0-9!@#\$%\^\&*\)\(+=._-]/; // If you want more special characters add them inside the braces at the end (after the '=+._-')
//   let upper_char = /[a-z]/;
//   let lower_char = /[A-Z]/;
//   return (
//     special_char.test(password) && // Checks if the password contains a special character or a number
//     upper_char.test(password) && // Checks if the password contains an upper case letter
//     lower_char.test(password) && // Checks if the password contains a lower case letter
//     password.length >= 8
//   ); // checks the password length
// };
// console.log(check_password('romeoe'))
