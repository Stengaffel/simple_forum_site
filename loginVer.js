function init() {
  var myForm = document.getElementById("login_form");
  myForm.onsubmit = validateForm;
}

onload = init;

function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if(!validateInput(username)) {
    alert("Please enter a valid username");
    return false;
  }
  if(!validateInput(password)) {
    alert("Please enter a valid password");
    return false;
  }
}

function validateInput(input) {
  var isValid = false;
  if(input.length <= 0 || input.length > 25) {
    isValid = false;
  }
  else {
    isValid = true;
  }
  return isValid;
}
