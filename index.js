//  access to the inputs by their id's
const email = document.getElementById("email");
const password = document.getElementById("password");

// form
const form = document.getElementById("form");

// error massage
const errorMassage = document.getElementById("error");


// Event listener
form.addEventListener("submit", (wiseMan) => {
  let messages = [];

  if (email.value === "" || email.value == null || email.value != "augustuss@flexipgroup.com") {
    messages.push("email is incorrect");
  }

  // else if (password.value == null || password.value == ""  && email.value == null ||  email.value === "") {
  //   messages.push("inputs can not be empty");
  // }

  else if (password.value != 1234) {
    messages.push("password is incorrect");
  }
 

 // Statement to shows the errors
  if (messages.length > 0) {
    errorMassage.innerText = messages.join(" or ");
    wiseMan.preventDefault();
  }
 
//   else{
//     window.location.assign("https://www.google.com");
//   }
  
});
